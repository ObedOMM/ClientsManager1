@extends('layouts.app')

@section('content')
    <h1> {{ $client->name }} </h1>
    <a href="/clients/{{ $client->id }}/edit" class="btn btn-secondary">Editer</a>
    @can('destroy', 'App\Client')
    <form action="/clients/{{ $client->id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Supprimer</button>
    </form>
    @endcan

    <hr>
    <p><strong>Email :</strong> {{ $client->email }} </p>
    <p><strong>Entreprise: </strong> {{ $client->entreprise->name }} </p>
    @if ($client->image)
        <img src="{{ asset('storage/' . $client->image) }}" alt="client-avatar" class="img-thumbnail" width="200">
    @endif
@endsection
