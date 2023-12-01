<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client =Client::all();
        return view('client.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'numero' => 'required'

        ]);
        $data = $request->all();
        Client::create($data);
        return redirect('client');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::find($id);
        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nom' => 'required',
            'prenom'  => 'required',
            'numero'  => 'required',
            'email'  => 'required',
        ]);
        $data = $request->all();
        $client = Client::find($id);
        $client->update($data);

        return redirect('client');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Client::destroy($id);
        return redirect('client');
    }
}
