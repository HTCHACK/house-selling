<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flat;
use App\Etaj;


class FlatController extends Controller
{
    

    public function index()
    {
        return view('admin.flat.index', ['flats' => Flat::with('etaj')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.flat.create', ['etajs' => Etaj::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Flat::create([
            'number' => $request->number,
            'count_rooms' => $request->count_rooms,
            'prize' => $request->prize,
            'etaj_id' => $request->etaj_id,
            'status' => boolval($request->status),
        ]);

        return redirect()->route('flats.index')->with('success', 'Flat Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('flat.show',['flat'=>Flat::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view(
            'admin.flat.edit',
            [
                'flat' => Flat::findorFail($id),
                'etajs' => Etaj::all(),
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flat $flat)
    {
        Flat::findorFail($flat->id)->update([
            'number' => $request->number,
            'count_rooms' => $request->count_rooms,
            'prize' => $request->prize,
            'etaj_id' => $request->etaj_id,
            'status' => boolval($request->status),
        ]);

        return redirect()->route('flats.index')->with('updated', 'Flat Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flat  $flat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flat $flat)
    {
        Flat::findorFail($flat->id)->delete();

        return redirect()->route('flats.index')->with('deleted', 'Flat Successfully Deleted');
    }
}
