<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestBookMail extends Mailable
{
    use Queueable, SerializesModels;

    private $bookOwner;
    private $message;
    /**
     * Create a new message instance.
     */
    public function __construct($bookOwnedBy,$requestMessage)
    {
        //  
        $this->bookOwner = $bookOwnedBy;
        $this->message = $requestMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Request Book Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'borrowedBooks.email.requestMessage',
            with:[
                'bookOwner'=>$this->bookOwner,
                'requestMessage'=>$this->message
            ]
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
