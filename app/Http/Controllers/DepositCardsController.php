<?php

namespace App\Http\Controllers;

use App\Models\DepositCards;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DepositCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $depositCards = DepositCards::all();
        return view('admin.DepositCards.DepositCards', compact('depositCards'));
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
        $depositCards = new DepositCards;
        $depositCards->title = $request->input('title');
        $depositCards->description = $request->input('description');
        $depositCards->link = $request->input('link');
        $depositCards->maintense = $request->input('maintense');
        $depositCards->security = $request->input('security');
        $depositCards->access = $request->input('access');
        $depositCards->commission = $request->input('commission');
        $depositCards->time = $request->input('time');
        $depositCards->money = $request->input('money');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/currentOffers/', $filename);
            $depositCards->image = $filename;
        }
        $depositCards->save();

        return redirect()->back()->with('status','Offer Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DepositCards  $depositCards
     * @return \Illuminate\Http\Response
     */
    public function show(DepositCards $depositCards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DepositCards  $depositCards
     * @return \Illuminate\Http\Response
     */
    public function edit(DepositCards $depositCards, $id)
    {
        $depositCards = DepositCards::find($id);
        return view('edit-depositCards', compact('depositCards'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DepositCards  $depositCards
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DepositCards $depositCards, $id)
    {
        $depositCards = DepositCards::findOrFail($id);
        $depositCards->title = $request->input('title');
        $depositCards->description = $request->input('description');
        $depositCards->link = $request->input('link');
        $depositCards->maintense = $request->input('maintense');
        $depositCards->security = $request->input('security');
        $depositCards->access = $request->input('access');
        $depositCards->commission = $request->input('commission');
        $depositCards->time = $request->input('time');
        $depositCards->money = $request->input('money');

        if($request->hasfile('image'))
        {
            $destination = 'images/depositCards/'.$depositCards->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/depositCards/', $filename);
            $depositCards->image = $filename;
        }
        $depositCards->update();
        return redirect()->back()->with('status', 'Offer updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DepositCards  $depositCards
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepositCards $depositCards, $id)
    {
        $depositCards = DepositCards::find($id);
        $destination = 'images/depositCards/'.$depositCards->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $depositCards->delete();
        return redirect()->back()->with('status','Card Deleted Successfully');
    }
}
