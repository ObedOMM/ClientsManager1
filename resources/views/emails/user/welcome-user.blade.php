@component('mail::message')
# Bienvenu {{ $user->name }}

Merçi de vous être enregistré(e) avec l'adresse {{ $user->email }}
@endcomponent
