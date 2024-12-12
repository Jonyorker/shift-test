<?php

namespace App\Console\Commands\Mail;

use App\Mail\PlatSci_Departed;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class FuelCardWelcomeMailer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:fuel-card-welcome-mailer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Fuel Card Welcome Emails';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::to('jyork@bisontransport.com')->send(new PlatSci_Departed(123, 123, 123, 123, 123));
    }
}
