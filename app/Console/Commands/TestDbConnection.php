<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

use function App\Helpers\sEcho;

class TestDbConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-db-connection';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test DB connections';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Config::set('app.debug', true);
        foreach (config('database.connections') as $key => $connection) {
            $server = $connection['host'] . ', ' . $connection['port'];
            try {
                sEcho('Connecting: ' . $key . ' (' . $server . ')');
                DB::connection($key)->getPDO();
                sEcho('- Successful', false);
            } catch (Exception $e) {
                sEcho('- Failed, ' . var_export($e->getMessage(), true), false);
                sEcho('Testing a Direct Connection', false);
                $conn = sqlsrv_connect($server, [
                    'Database' => $connection['database'],
                    'UID' => $connection['username'],
                    'PWD' => $connection['password'],
                ]);

                if ($conn) {
                    sEcho('- Successful, issue might be with Framework!', false);
                } else {
                    sEcho('- Failed, ', false);
                    if (($errors = sqlsrv_errors()) != null) {
                        foreach ($errors as $error) {
                            sEcho($error['message'], false);
                        }
                    }
                }

            }
        }
        Config::set('app.debug', false);
    }
}
