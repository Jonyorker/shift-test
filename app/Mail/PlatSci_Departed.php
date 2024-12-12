<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PlatSci_Departed extends Mailable
{
    use Queueable, SerializesModels;
    private mixed $mov;
    private mixed $trc;
    private mixed $ord;
    private mixed $nextcmp;
    private mixed $nextdt;

    public function __construct(int|string $mov, int|string $nextcmp, int|string $ord, int|string $trc, int|string $nextdt)
    {
        $this->mov = $mov;
        $this->nextcmp = $nextcmp;
        $this->ord = $ord;
        $this->trc = $trc;
        $this->nextdt = $nextdt;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Move: {$this->mov} - Truck: {$this->trc} has started approach to rail yard"
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.PlatSci.departed',
            with: ['nextcmp' => $this->nextcmp,        'ord' => $this->ord,                'trc' => $this->trc,                'nextdt' => $this->nextdt,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
