<?php

namespace App\Http\Controllers;

use App\Block;
use App\Building;
use Illuminate\Http\Request;

class BlockController extends Controller
{
    

    public function index()
    {

        return view('admin.block.index',['blocks' =>Block::with('buildingBlock')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.block.create',['buildings' =>Building::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Block::create($request->all());

        return redirect()->route('blocks.index')->with('success','Block Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('block.show',[
            'block'=>Block::findorFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.block.edit',['block'=>Block::findorFail($id),'buildings' =>Building::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Block $block)
    {

        Block::findorFail($block->id)->update($request->all());

        return redirect()->route('blocks.index')->with('updated','Blocks Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {

        Block::findorFail($block->id)->delete();

        return redirect()->route('blocks.index')->with('deleted','Blocks Successfully Deleted');

    }
}
