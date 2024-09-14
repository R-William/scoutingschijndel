<?php

namespace App\Jobs;

use App\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class MailRentReservation implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Reservation $reservation;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Mail::to('verhuur@scoutingschijndel.nl')->send(new \App\Mail\Reservation\ReservationRent($this->reservation));
        \Mail::to($this->reservation->email)->send(new \App\Mail\Reservation\ReservationUser($this->reservation));
    }
}
