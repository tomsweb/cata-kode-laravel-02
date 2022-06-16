<?php

namespace App\Observers;

use App\Http\Models\Appointment;
use App\Notifications\AppointmentNotification;
use Illuminate\Support\Facades\Notification;

class AppointmentObserver
{
    /**
     * Handle the appointment "created" event.
     *
     * @param Appointment $appointment
     * @return void
     */
    public function created(Appointment $appointment)
    {
        Notification::route('mail', $appointment->email)
            ->notify(new AppointmentNotification());
    }

    /**
     * Handle the appointment "updated" event.
     *
     * @param Appointment $appointment
     * @return void
     */
    public function updated(Appointment $appointment)
    {
        //
    }

    /**
     * Handle the appointment "deleted" event.
     *
     * @param Appointment $appointment
     * @return void
     */
    public function deleted(Appointment $appointment)
    {
        //
    }

    /**
     * Handle the appointment "restored" event.
     *
     * @param Appointment $appointment
     * @return void
     */
    public function restored(Appointment $appointment)
    {
        //
    }

    /**
     * Handle the appointment "force deleted" event.
     *
     * @param Appointment $appointment
     * @return void
     */
    public function forceDeleted(Appointment $appointment)
    {
        //
    }
}
