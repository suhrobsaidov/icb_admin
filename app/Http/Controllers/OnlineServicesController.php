<?php

namespace App\Http\Controllers;

use App\Models\OnlineServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OnlineServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onlineServices = OnlineServices::all();
        return view('admin.onlineServices.index', compact('onlineServices'));
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
        $onlineServices = new OnlineServices;
        $onlineServices->title = $request->input('title');
        $onlineServices->description = $request->input('description');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/onlineServices/', $filename);
            $onlineServices->image = $filename;
        }
        $onlineServices->save();

        return redirect()->back()->with('status','Offer Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OnlineServices  $onlineServices
     * @return \Illuminate\Http\Response
     */
    public function show(OnlineServices $onlineServices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OnlineServices  $onlineServices
     * @return \Illuminate\Http\Response
     */
    public function edit(OnlineServices $onlineServices, $id)
    {
        $onlineServices = OnlineServices::find($id);
        return view('edit-onlineServices', compact('onlineServices'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OnlineServices  $onlineServices
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OnlineServices $onlineServices, $id)
    {
        $onlineServices = OnlineServices::findOrFail($id);
        $onlineServices->title = $request->input('title');
        $onlineServices->description = $request->input('description');

        if($request->hasfile('image'))
        {
            $destination = 'images/onlineServices/'.$onlineServices->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/currentOffers/', $filename);
            $onlineServices->image = $filename;
        }
        $onlineServices->update();
        return redirect()->back()->with('status', 'Offer updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OnlineServices  $onlineServices
     * @return \Illuminate\Http\Response
     */
    public function destroy(OnlineServices $onlineServices, $id)
    {
        $onlineServices = OnlineServices::find($id);
        $destination = 'images/onlineServices/'.$onlineServices->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $onlineServices->delete();
        return redirect()->back()->with('status','Offer Deleted Successfully');
    }
}
