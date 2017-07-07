<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $request; //make this public so it can be use in the view /emails/contact.blade.php

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // get the email address the user puts into the form.
        return $this->from($this->request->input('email'))
            ->subject('Contact form submission')
            ->view('emails.contact');   //resources/views/emails/contact.blade
    }
}