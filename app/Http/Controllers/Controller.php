<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserListCollectionResource;
use App\Http\Resources\UserListResource;
use App\Http\Resources\UserListWithAddressResource;
use App\Http\Resources\UserListWithRelationsResource;
use App\Jobs\TestSend;
use App\Models\bisonweb\UserList;
use App\Models\bisonweb\UserListAddress;
use App\Models\bisonweb\UserListCompany;
use App\Models\bisonweb\UserListContact;
use App\Rules\Boolean;
use Exception;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

// These are examples, and should not be used as in, in production
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * This is a description for swagger
     */
    public function createUserList(Request $request): UserListResource
    {
        // Example of how to validate data.
        // new Boolean is a special validation rule to allow other languages such as JS to work nicely sending literals.
        $request->validate([
            'first_name' => ['required', 'string'],
            'is_enabled' => ['required', new Boolean],
            'email' => ['required', 'email'],
            'driver_sense' => [new Boolean],
        ]);

        // Example of how to set a default input value. I would be tempted to put these in the factory for defaults.
        $request->input('driver_sense', false);

        // This will make and save an object to the db.
        $user = UserList::factory()->create([
            'first_name' => $request->input('first_name'),
        ]);

        // Setting up Transacton Rollback
        try {
            // Begin the DB Transaction
            DB::beginTransaction();

            // This will make an object
            $user = UserList::factory()->make([
                'first_name' => $request->input('first_name'),
            ]);
            // This will save it, useful if you need to run methods after instantiating it before saving to db.
            $user->save();

            // Example of Laravel's Dump and Die function. Similar to var_dump, except prettified, dynamically expandable
            // and kills application thread. Useful for debugging if not using XDebug.
            // dd($user->get_username());

            // Create address for the user (goes to another db)
            UserListAddress::factory()->create(['user_list_id' => $user->id]);

            // Create Company for the user
            UserListCompany::factory()->create(['user_list_id' => $user->id]);

            // Create Contact for the user
            UserListContact::factory()->create(['user_id' => $user->id]);
            UserListContact::factory()->create(['user_list_id' => $user->id]);
            UserListContact::factory()->create(['user_list_id' => $user->id]);

            // Finally write the transactions
            DB::commit();

            // Create a new payload serializer and pass the object
            return new UserListResource($user);
        } catch (Exception $e) {
            // Roll back if transaction failed
            DB::rollback();
            // Error code if transaction failed, with message
            abort(400, 'This case is not supported');
        }
    }

    // Example of route parameters being accessible before the request object
    public function getUserList(int $id, Request $request): UserListResource
    {

        // Example of how to get an object
        $user = UserList::where('id', $id)->get()->firstOrFail();

        // Example of how to write to log
        Log::debug($user->get_username());

        return new UserListResource($user);
    }

    public function getUserLists(Request $request): UserListCollectionResource
    {

        // Example of how to get a collection of objects
        $users = UserList::where('gender_code', 'male')->get()->all();

        return new UserListCollectionResource($users);
    }

    public function getUserListsPaginated(Request $request): UserListCollectionResource
    {
        // Example of how to validate pagination requests
        $request->validate([
            'pagination' => ['required', 'int'],
            'page' => ['int'],
        ]);

        $pagination = $request->input('pagination');

        // Example with pagination
        $users = UserList::where('gender_code', 'male')->paginate($pagination);

        // Return the serialized collection of UserList
        return new UserListCollectionResource($users);
    }

    public function updateUserList(int $id, Request $request): UserListResource
    {
        $request->validate([
            'first_name' => ['required', 'string'],
        ]);

        // Example where we grab the Object, can do something to it and easily save
        $user = UserList::where('id', $id)->get()->firstOrFail();

        // Modify record with input
        $user->first_name = $request->input('first_name');

        // Save record with modifications
        $user->save();

        // Showcase of the refresh() method that grabs the edited object from the DB regardless of application state.
        return new UserListResource($user->refresh());

    }

    public function deleteUserList(int $id): Response
    {
        // Super simple delete, and return 204.
        UserList::destroy($id);

        // Delete requests should return no content
        return response()->noContent();
    }

    public function rawSQL(Request $request)
    {

        // Example of how to do raw SQL queries. This should be avoided where possible in favor of Object-Model approach
        // as it is much easier to test with factories. This will require a Mock, more on that later.
        $expression = DB::raw("SELECT last_name from user_list where gender_code = 'male'");

        $string = $expression->getValue(DB::connection('bisonweb')->getQueryGrammar());

        return DB::connection('bisonweb')->select($string);

    }

    public function getUserListwithAddress(int $id, Request $request): UserListWithAddressResource
    {
        // Example of fetching relationships using "with" keyword. Relationship must be defined in both models.
        return new UserListWithAddressResource(UserList::with('UserListAddress')->where('id', '=', $id)->get()->firstOrFail());
    }

    // If you wish to overwrite which DB a model should use, here is the workflow
    public function getUserListwithRelations(int $id, Request $request): UserlistWithRelationsResource
    {
        // Instantiate the model
        $userlist = new UserList;

        // Override the db connection
        $userlist->setConnection('psbison');

        // Lets get an array of relationships. Again, they must be defined in each model.
        $query = UserList::with(['UserListAddress', 'UserListCompany', 'UserListContact'])->where('id', '=', $id);

        return new UserListWithRelationsResource($query->get()->firstOrFail());
    }

    public function driverserviceRaw(): array
    {

        $expression = DB::raw("
                    SELECT
                fs.*,
                cmt_date,
                cmt_text,
                a.act_id
              FROM driverservice.dbo.drm_activity AS a ( nolock )
              JOIN driverservice.dbo.drm_issues AS i ( nolock ) ON i.act_id = a.act_id
              JOIN driverservice.dbo.drm_actcomment AS c ( nolock ) ON c.act_id = a.act_id
              JOIN bisonweb.dbo.formstack_rateMyTrip_view AS fs
                ON fs.DriverCode = a.mpp_id AND bisonweb.dbo.RemoveAlphaChars(CONVERT(VARCHAR(100), c.cmt_text)) = fs.submission_id
              WHERE i.iss_problem = 'O50'
                    AND i.iss_subproblem LIKE '228%'
                    AND a.mpp_id = 'DHH008'
                    AND a.act_datetime >= DATEADD(MONTH, -7, GETDATE())
            UNION ALL
              SELECT
                fs.*,
                cmt_date,
                cmt_text,
                a.act_id
              FROM driverservice.dbo.drm_activity AS a ( nolock )
              JOIN driverservice.dbo.drm_issues AS i ( nolock ) ON i.act_id = a.act_id
              JOIN driverservice.dbo.drm_actcomment AS c ( nolock ) ON c.act_id = a.act_id
              JOIN bisonweb.dbo.formstack_rateMyTrip_view AS fs
                ON fs.DriverCode = a.mpp_id AND bisonweb.dbo.RemoveAlphaChars(a.act_move) = fs.MoveNumber
              WHERE i.iss_problem = 'O50'
                    AND i.iss_subproblem LIKE '228%'
                    AND a.mpp_id = 'DHH008'
                    AND a.act_datetime >= DATEADD(MONTH, -7, GETDATE())"
        );

        $string = $expression->getValue(DB::connection('driverservice')->getQueryGrammar());

        return DB::connection('driverservice')->select($string);

    }

    // Example of driverserviceRaw using Eloquent, and the union function
    public function driverserviceEloquent()
    {

        // Nvarchar bites us
        // Text data type is obsolete
        $a = DB::table('driverservice.dbo.drm_activity as a')
            ->select('fs.*', 'c.cmt_date', 'c.cmt_text', 'a.act_id')
            ->join('driverservice.dbo.drm_issues as i', 'i.act_id', '=', 'a.act_id')
            ->join('driverservice.dbo.drm_actcomment as c', 'c.act_id', '=', 'a.act_id')
            ->join('bisonweb.dbo.formstack_rateMyTrip_view as fs', function (JoinClause $join) {
                $join->on('fs.DriverCode', '=', 'a.mpp_id')->on(DB::raw('bisonweb.dbo.RemoveAlphaChars(CONVERT(VARCHAR(100), c.cmt_text))'), '=', 'fs.submission_id');
            })
            ->where('i.iss_problem', '=', 'O50')
            ->where('i.iss_subproblem', 'LIKE', '228%')
            ->where('a.mpp_id', '=', 'DHH008')
            ->where('a.act_datetime', '>=', date('F 1, Y', strtotime('-7 months')));

        $b = DB::table('driverservice.dbo.drm_activity as a')
            ->select('fs.*', 'c.cmt_date', 'c.cmt_text', 'a.act_id')
            ->join('driverservice.dbo.drm_issues as i', 'i.act_id', '=', 'a.act_id')
            ->join('driverservice.dbo.drm_actcomment as c', 'c.act_id', '=', 'a.act_id')
            ->join('bisonweb.dbo.formstack_rateMyTrip_view as fs', function (JoinClause $join) {
                $join->on('fs.DriverCode', '=', 'a.mpp_id')->on(DB::raw('bisonweb.dbo.RemoveAlphaChars(a.act_move)'), '=', 'fs.MoveNumber');
            })
            ->where('i.iss_problem', '=', 'O50')
            ->where('i.iss_subproblem', 'LIKE', '228%')
            ->where('a.mpp_id', '=', 'DHH008')
            ->where('a.act_datetime', '>=', date('F 1, Y', strtotime('-7 months')));

        // How to union two queries
        return $a->union($b)->get();

    }

    public function testRabbitMessages(): Response
    {
        Log::debug('going to dispatch');
        TestSend::dispatch([
            'id' => '123',
        ]);

        return response()->noContent();

    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return response('Logged in', 200);
        } else {
            return response()->noContent();
        }
    }
}
