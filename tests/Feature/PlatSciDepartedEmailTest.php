<?php

namespace Tests\Feature;

use App\Mail\PlatSci_Departed;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class PlatSciDepartedEmailTest extends TestCase
{
    /**
     * @test
     */
    public function content(): void
    {

        $mov = '123';
        $nextcmp = 123;
        $ord = 345;
        $trc = 'abc';
        $nextdt = '12345678';

        $mailable = new PlatSci_Departed($mov, $nextcmp, $ord, $trc, $nextdt);

        $mailable->assertHasSubject("Move: {$mov} - Truck: {$trc} has started approach to rail yard");
        $mailable->assertSeeInOrderInHtml([$nextcmp, $ord, 'CheckTMW', $trc, 'CheckTMW', 'CheckTMW', $nextdt]);
    }

    /**
     * @test
     */
    public function mailer(): void
    {
        Mail::fake();

        // Assert that no mailables were sent...
        Mail::assertNothingSent();

        $mov = '123';
        $nextcmp = 123;
        $ord = 345;
        $trc = 'abc';
        $nextdt = '12345678';

        Mail::to('test@example.com')->send(new PlatSci_Departed($mov, $nextcmp, $ord, $trc, $nextdt));

        // Assert that a mailable was sent...
        Mail::assertSent(PlatSci_Departed::class);

        // Assert 1 total mailables were sent...
        Mail::assertSentCount(1);
    }
}
