<?php

namespace App\Http\Controllers;

use App\Building;
use Illuminate\Http\Request;
use App\Http\Requests\BuildingRequest;
use Illuminate\Support\Str;
use App\Block;

class BuildingController extends Controller
{
    

    public function index()
    {
        return view('admin.building.index', ['buildings' => Building::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.building.create', ['buildings' => Building::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($request->file('img')) {
            $image = $request->file('img');
            if ($image->isValid()) {
                $imageName = time() . '.' . request()->img->getClientOriginalExtension();
                $input['img'] = $imageName;
                request()->img->move(public_path('storage'), $imageName);
            }
        }

        Building::create($input);

        return redirect()->route('buildings.index')->with('success', 'Building Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('building.show',[
            'building'=>Building::findorFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.building.edit', ['building' => Building::findorFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Building $building)
    {
        $input = $request->all();

        if ($request->file('img')) {
            $image = $request->file('img');
            if ($image->isValid()) {
                $imageName = time() . '.' . request()->img->getClientOriginalExtension();
                $input['img'] = $imageName;
                request()->img->move(public_path('storage'), $imageName);
            }
        }

        Building::find($building->id)->update($input);

        return redirect()->route('buildings.index')->with('updated', 'Building Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function destroy(Building $building)
    {
        Building::find($building->id)->delete();

        return redirect()->route('buildings.index')->with('deleted', 'Building Successfully deleted');
    }

    public function UserPage()
    {
        return view('building.index',['buildings' =>Building::all()]);
    }
}
