@extends('layouts.app')

@section('content')

<h1>Editer le profile de {{ $client->name }} </h1>

<form action="{{ route('clients.update', ['client' => $client->id ]) }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @include('includes.form')
    <button type="submit" class="btn btn-primary">Sauvergarder les informations</button>
</form>


@endsection
