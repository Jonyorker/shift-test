<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        // Runs at the begging on every test.

        parent::setUp();

        // Ensure we are using test databases, and kill tests if we aren't

        foreach (config('database.connections') as $key => $connection) {

            // No need to check monitoring DB for testing.
            if (DB::connection($key)->getDatabaseName() === 'monitoring') {
                continue;
            }

            if ($connection['host'] != '127.0.0.1') {
                print_r($key);
                print_r($connection);
                exit('Danger - Might be connecting to production databases');
            }

            if (config('app.env') != 'testing') {
                if (str_contains(DB::connection($key)->getDatabaseName(), '-testing')) {
                    // Ensure that the db are up to date with migrations before running tests

                    Artisan::call('migrate', [
                        '--path' => '/database/migrations/' . $key,
                        '--database' => $key,
                    ]);
                } else {
                    print_r($key);
                    print_r($connection);
                    exit('Danger - Test DBs not detected');
                }
            }
        }
    }
}
