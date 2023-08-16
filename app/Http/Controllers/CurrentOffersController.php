<?php

namespace App\Http\Controllers;

use App\Models\CurrentOffers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CurrentOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.currentOffers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currentOffers = new CurrentOffers;
        $currentOffers->title = $request->input('title');
        $currentOffers->description = $request->input('description');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/currentOffers/', $filename);
            $currentOffers->image = $filename;
        }
        $currentOffers->save();

        return redirect()->back()->with('status','Offer Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CurrentOffers  $currentOffers
     * @return \Illuminate\Http\Response
     */
    public function show(CurrentOffers $currentOffers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CurrentOffers  $currentOffers
     * @return \Illuminate\Http\Response
     */
    public function edit(CurrentOffers $currentOffers, $id)
    {
        $currentOffers = CurrentOffers::find($id);
        return view('admin.currentOffers.edit', compact('currentOffers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CurrentOffers  $currentOffers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CurrentOffers $currentOffers, $id)
    {
        $currentOffers = CurrentOffers::findOrFail($id);
        $currentOffers->title = $request->input('title');
        $currentOffers->description = $request->input('description');

        if($request->hasfile('image'))
        {
            $destination = 'images/currentOffers/'.$currentOffers->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/currentOffers/', $filename);
            $currentOffers->image = $filename;
        }
        $currentOffers->update();
        return view('admin.currentOffers.currentOffers')->with('status', 'Offer updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CurrentOffers  $currentOffers
     * @return \Illuminate\Http\Response
     */
    public function destroy(CurrentOffers $currentOffers, $id)
    {
        $currentOffers = CurrentOffers::find($id);
        $destination = 'images/currentOffers/'.$currentOffers->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $currentOffers->delete();
        return redirect()->back()->with('status','Offer Deleted Successfully');
    }
}
