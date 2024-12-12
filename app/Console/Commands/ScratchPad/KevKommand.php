<?php

namespace App\Console\Commands\ScratchPad;

use App\Models\bison\PlatSciAutoprocess;
use App\Models\psbison\Stops;
use Illuminate\Console\Command;

use function App\Helpers\sEcho;

class KevKommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scratch:kl
                            {stp? : The name of the stp you want to update.}';

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
        if ($this->argument('stp')) {
            $stop = PlatSciAutoprocess::where('stp', $this->argument('stp'))->where('formid', '2')->where('drv', 'MARR09');
            if (! $stop->exists()) {
                sEcho('No record found for stp: ' . $this->argument('stp'));

                return;
            }
            $stop->update(['err' => 'Hello world']);
            sEcho('Updated platsci_autoprocess where stp: ' . $this->argument('stp'));
        } else {
            $stops = Stops::with('event')->where('lgh_number', '=', '7503041')->orderBy('stp_arrivaldate')->get();
            sEcho('No stop to update but here are some stop numbers you could try');
            foreach ($stops as $stop) {
                sEcho('Stp:' . $stop->stp_number);
            }
        }
    }
}
