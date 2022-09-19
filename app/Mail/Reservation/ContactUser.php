<?php

namespace App\Mail\Reservation;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Contact;

class ContactUser extends Mailable
{
    use Queueable, SerializesModels;

    public Contact $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
                ->subject('Contactformulier website')
                ->from('verhuur@scoutingschijndel.nl')
                ->bcc('website@scoutingschijndel.nl')
                ->view('emails.reservation.contact_user', ['contact' => $this->contact])
                ->text('emails.reservation.contact_text_user', ['contact' => $this->contact]);
    }
}
