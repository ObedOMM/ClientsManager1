@extends('layouts.app')

@section('content')

<h1>Contactez-nous</h1>
    @if(!session()->has('message'))
<form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Votre nom ..." value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">
            {{ $errors->first('name') }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Votre email ..." value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $errors->first('email') }}
            </div>
            @enderror
        </div>

        <div class="form-group">
        <textarea name="message" cols="30" rows="10" class="form-control @error('message') is-invalid @enderror" placeholder="Votre message ...">{{ old('message') }}</textarea>
        @error('message')
        <div class="invalid-feedback">
            {{ $errors->first('message') }}
        </div>
        @enderror
        <button class="btn btn-primary">Envoyer mon message</button>
        </div>
    </form>
    @endif

@endsection
