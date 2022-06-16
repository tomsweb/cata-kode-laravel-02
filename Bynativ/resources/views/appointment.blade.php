@extends('layouts.app')

@section('content')
    <a href="{{ route('appointments.create') }}" class="btn btn-primary float-end">< Retour</a>
    <h2>Votre demande de RDV</h2>

    <br><br>
    <div class="mb-4">
        Nom : {{ $appointment->name }}
    </div>
    <div class="mb-4">
        Téléphone : {{ $appointment->phone }}
    </div>
    <div class="mb-4">
        Email : {{ $appointment->email }}
    </div>
    <div class="mb-4">
        Date : {{ $appointment->date }}
    </div>
    <div class="mb-4">
        Message : {{ $appointment->message }}
    </div>

@endsection
