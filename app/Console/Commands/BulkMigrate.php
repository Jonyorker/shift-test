<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BulkMigrate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:bulk-migrate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        foreach (config('database.connections') as $key => $connection) {
            $this->call('migrate', [
                '--path' => '/database/migrations/' . $key,
                '--database' => $key,
            ]);
        }
    }
}
