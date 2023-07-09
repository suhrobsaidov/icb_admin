<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fAQ = FAQ::all();
        // return view('fAQ', compact('fAQ'));
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
        $fAQ = new FAQ;
        $fAQ->title = $request->input('title');
        $fAQ->description = $request->input('description');
        $fAQ->page = $request->input('page');
        $fAQ->link = $request->input('link');
        $fAQ->language = $request->input('language');
        $fAQ->save();

        //return view('/save-fAQ')->with('status', 'FAQ saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQ $fAQ, $id)
    {
        $fAQ = FAQ::find($id);
        //return view('edit-fAQ', compact('fAQ'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQ $fAQ, $id)
    {
        $fAQ = FAQ::findOrFail($id);
        $fAQ->title = $request->input('title');
        $fAQ->description = $request->input('description');
        $fAQ->page = $request->input('page');
        $fAQ->link = $request->input('link');
        $fAQ->language = $request->input('language');
        $fAQ->update();
        //return view('/update-fAQ')->with('status', 'FAQ updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQ $fAQ, $id)
    {
        $fAQ = FAQ::find($id);
        $fAQ->delete();
        //return redirect('fAQ')->back()->with('status','FAQ Deleted Successfully');
    }
}
