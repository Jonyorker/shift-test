<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

use function App\Helpers\sEcho;

class TestDirectory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-directory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks if directory exists';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Config::set('app.debug', true);

        $directory = '//fileserver/j/msoffice/HR/Performance Management/Workday Migration - Last Performance Reviews';
        sEcho($directory);
        if (is_dir($directory)) {
            sEcho('Is a working Directory');
            if ($files = scandir($directory)) {
                sEcho($files);
            }
        } else {
            sEcho('Not a working directory');
        }

        Config::set('app.debug', false);
    }
}
