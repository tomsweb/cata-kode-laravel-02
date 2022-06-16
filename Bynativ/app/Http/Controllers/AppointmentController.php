<?php

namespace App\Http\Controllers;

use App\Http\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        return view('appointments');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'phone' => 'string|nullable',
            'email' => 'email|required',
            'date' => 'date|required',
            'message' => 'string|nullable',
        ]);

        $appointment = Appointment::create($data);

        return redirect(route('appointments.create'))->with('success', "Votre demande de RDV a bien été prise en compte. <a href=\"" . route('appointments.show', ['appointment' => $appointment->id]) . "\">Consulter votre demande de rendez-vous</a>");
    }

    public function show(Appointment $appointment)
    {
        return view('appointment', ['appointment' => $appointment]);
    }
}
