<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        //
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('email from ' . $this->details['email'])->attach($this->details['file']->getRealPath(), array(
            'as' => $this->details['file']->getClientOriginalName(),    
            'mime' => $this->details['file']->getMimeType()
        ))->from($this->details['email'])->view('mail.template', ['details' => $this->details]);
    }
}
