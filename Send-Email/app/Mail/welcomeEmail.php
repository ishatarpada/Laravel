<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class welcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailMessage;
    public $subject;
    public $request;
    public $fileName;

    /* Create a new message instance. */
    public function __construct($request, $fileName)
    {
        $this->request = $request;
        $this->fileName = $fileName;
    }

    /* Get the message envelope */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Email',
        );
    }

    /* Get the message content definition */
    public function content(): Content
    {
        return new Content(
            view: 'Mail.welcome-mail',
        );
        // text: "Mail.welcome-mail",
    }

    /* Get the attachments for the message @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $file = [];

        if ($this->fileName) {
            $file = [
                Attachment::fromPath(public_path('/uploads/' . $this->fileName))
                /* Attachment::fromStorage(public_path('/uploads/' . $this->fileName)),
                Attachment::fromStorageDisk( 's3' ,public_path('/uploads/' . $this->fileName)) */
            ];
        }

        return $file;
    }
}
