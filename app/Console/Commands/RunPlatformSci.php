<?php

namespace App\Console\Commands;

use App\Helpers\Libraries\PlatformSci\PlatformSci;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class RunPlatformSci extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:run-platform-sci';

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
        // Run Seeder to put generated data in the DB to run
        // Remove when in production
        //$this->call('db:seed', ['--class' => 'TranzactorSeeder']);

        // Call library
        $platformSci = new PlatformSci;
        $platformSci->main();

        Log::debug('PlatformSci run successfully');
    }
}
