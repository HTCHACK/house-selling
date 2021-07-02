<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Flat;

class ClientController extends Controller
{
    

    public function index()
    {
        return view('admin.client.index',['clients'=>Client::with('flat')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Client::create($request->all());

        return redirect()->back()->with('success','Your Info Successfully Send');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.client.edit',['client'=>Client::findorFail($id),'flats'=>Flat::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        Client::findorFail($client->id)->update([
            'phone_number' => $request->phone_number,
            'flat_id' => $request->flat_id,
            'address' => $request->address,
            'status' => boolval($request->status),
            'name' => $request->name,
            'surname' => $request->surname,
        ]);


        return redirect()->route('clients.index')->with('updated', 'Client Status Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {

        Client::findorFail($client->id)->delete();
        return redirect()->route('clients.index')->with('deleted', 'Client Status Successfully Deleted');
    }
}
