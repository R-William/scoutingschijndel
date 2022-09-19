<?php

namespace App\Mail\Registration;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Registration;

class RegistrationGroup extends Mailable
{
    use Queueable, SerializesModels;

    public Registration $registration;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->subject('Nieuw Lid '.$this->registration->name)
                ->from('website@scoutingschijndel.nl')
                ->bcc('website@scoutingschijndel.nl')
                ->view('emails.registration.group', ['registration' => $this->registration])
                ->text('emails.registration.group_text', ['registration' => $this->registration]);
    }
}
