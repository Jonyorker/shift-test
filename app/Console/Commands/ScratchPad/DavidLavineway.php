<?php

namespace App\Console\Commands\ScratchPad;

use Illuminate\Console\Command;

use function App\Helpers\sEcho;

class DavidLavineway extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scratch:dl
                            {user? : The name of the user you want to greet.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'A scratchpad is the file you use to test your assumptions by just writing some quick code.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        if ($this->argument('user')) {
            sEcho('Hello ' . $this->argument('user'));
        } else {
            sEcho('Hello World');
        }
    }
}
