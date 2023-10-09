<?php

declare(strict_types=1);

namespace App\Mail;

use App\Models\ContactRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactRequestedMail extends Mailable
{
    use Queueable;
    use SerializesModels;

    public function __construct(
        protected ContactRequest $contactRequest,
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [
                $this->contactRequest->email,
            ],
            subject: 'Nueva solicitud de contacto',
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact-request-company',
            with: [
                'request' => $this->contactRequest,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
