@extends('layouts.app')

@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success">
            {!! session()->get('success') !!}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('appointments.store') }}">
        @csrf
        <div class="row mb-4">
            <div class="col-sm-12">
                Les champs marqués d'une <sup class="text-danger">*</sup> sont obligatoires.
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-6">
                <label class="form-label">Nom<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
            </div>
            <div class="col-sm-6">
                <label class="form-label">Téléphone</label>
                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" pattern="[0][1-9]{1}[0-9]{8}">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-6">
                <label class="form-label">Email<sup class="text-danger">*</sup></label>
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="col-sm-6">
                <label class="form-label">Date et heure<sup class="text-danger">*</sup></label>
                <input type="datetime-local" class="form-control" name="date" value="{{ old('date') }}" required>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12">
                <label class="form-label">Message</label>
                <textarea style="height: 200px;" class="form-control" name="message">{{ old('message') }}</textarea>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-sm-12">
                <input type="submit" class="btn btn-primary" value="Envoyer ma demande" />
            </div>
        </div>
    </form>
@endsection
