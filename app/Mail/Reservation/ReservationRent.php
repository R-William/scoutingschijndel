<?php

namespace App\Mail\Reservation;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Reservation;

class ReservationRent extends Mailable
{
    use Queueable, SerializesModels;

    public Reservation $reservation;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
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
                ->from('website@scoutingschijndel.nl')
                ->bcc('website@scoutingschijndel.nl')
                ->view('emails.reservation.booking_rent', ['reservation' => $this->reservation])
                ->text('emails.reservation.booking_text_rent', ['reservation' => $this->reservation]);
    }
}
