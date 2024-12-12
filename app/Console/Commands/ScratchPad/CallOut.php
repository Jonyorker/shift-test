<?php

namespace App\Console\Commands\ScratchPad;

use Illuminate\Console\Command;

class CallOut extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scratch:call-out {user=Developer}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Testing the Call-Out command to scratch:dl.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $user = $this->argument('user');
        $this->line('Starting the call-out');
        $this->call('scratch:dl', [
            'user' => $user,
        ]);
        $this->line('Ending the call-out');

    }
}
