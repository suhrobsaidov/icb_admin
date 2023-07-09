<?php

namespace App\Http\Controllers;

use App\Models\card;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = card::all();
        return view('admin.card.card', compact('cards'));
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
        $card = new card;
                $card->title = $request->input('title');
                $card->description = $request->input('description');
                $card->page = $request->input('page');
                if($request->hasfile('image'))
                {
                    $file = $request->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $filename = time().'.'.$extention;
                    $file->move('images/cards/', $filename);
                    $card->image = $filename;
                }
                $card->link = $request->input('link');
                $card->language = $request->input('language');
                $card->save();

        return redirect()->back()->with('status','Card Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(card $card, $id)
    {
        $card = card::find($id);
        return view('edit-card', compact('card'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, card $card, $id)
    {
         $card = card::findOrFail($id);
                $card->title = $request->input('title');
                $card->description = $request->input('description');
                $card->page = $request->input('page');
                if($request->hasfile('image'))
                {
                    $destination = 'images/cards/'.$card->image;
                    if(File::exists($destination)){
                        File::delete($destination);
                    }
                    $file = $request->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $filename = time().'.'.$extention;
                    $file->move('images/cards/', $filename);
                    $card->image = $filename;
                }
                $card->link = $request->input('link');
                $card->language = $request->input('language');
                $card->update();
        return redirect()->back()->with('status','Card Saved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(card $card, $id)
    {
        $card = card::find($id);
        $destination = 'images/cards/'.$card->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $card->delete();
        return redirect()->back()->with('status','Card Deleted Successfully');
    }
}
