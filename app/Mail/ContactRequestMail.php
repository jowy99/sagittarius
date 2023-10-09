<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactRequestMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct()
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: trans('email.contact.client.title'),
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact-client-request',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
