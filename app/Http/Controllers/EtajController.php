<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Block;
use App\Etaj;



class EtajController extends Controller
{
    

    public function index()
    {
        return view('admin.etaj.index', ['etajs' => Etaj::with('blocks')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.etaj.create', ['blocks' => Block::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Etaj::create($request->all());

        return redirect()->route('etajs.index')->with('success','Flour Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etaj  $etaj
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('flour.show',['etaj'=>Etaj::findorFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Etaj  $etaj
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.etaj.edit',[
            'etaj'=>Etaj::findorFail($id),
            'blocks'=>Block::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etaj  $etaj
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etaj $etaj)
    {
        Etaj::findorFail($etaj->id)->update($request->all());

        return redirect()->route('etajs.index')->with('updated','Flour Succesfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etaj  $etaj
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etaj $etaj)
    {
        Etaj::findorFail($etaj->id)->delete();

        return redirect()->route('etajs.index')->with('deleted','Flour Succesfully Deleted');
    }
}
