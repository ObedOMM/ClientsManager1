<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Entreprise;

class ClientsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $clients = Client::with('entreprise')->paginate(15);

        return view('clients.index', compact('clients'));
    }

public function create()
{
    $this->authorize('create', Client::class);
    $entreprises = Entreprise::all();
    $client = new Client();

    return view('clients.create', compact('entreprises', 'client'));
}

    public function store()
    {
        $client = Client::create($this->validator());

        $this->storeImage($client);

        return back();
        // dd($pseudo);
    }

    public function show(Client $client)
    {
        // $client = Client::where('id', $client)->firstOrFail();

        return view('clients.show', compact('client'));
    }

    public function edit(Client $client)
    {
        $entreprises = Entreprise::all();

        return view('clients.edit', compact('client', 'entreprises'));
    }

    public function update(Client $client)
    {
        $client->update($this->validator());

        $this->storeImage($client);

        return redirect('clients/' . $client->id);
    }

    public function destroy(Client $client)
    {
        $this->authorize('delete', $client);
        $client->delete();

        return redirect('clients');
    }

    private function validator()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'status' => 'required|integer',
            'entreprise_id' => 'required|Integer',
            'image' => 'sometimes|image|max:5000'
        ]);
    }

    private function storeImage(Client $client)
    {
        if(request('image'))
        {
            $client->update([
                'image' => request('image')->store('avatars', 'public'),
            ]);
        }
    }

}
