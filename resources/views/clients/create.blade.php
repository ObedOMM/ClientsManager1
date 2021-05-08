@extends('layouts.app')

@section('content')

<h1>Créer un nouveau client</h1>

<form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
    @include('includes.form')
    <button type="submit" class="btn btn-primary">Ajouter le client</button>
</form>


@endsection
