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
        $fAQs = FAQ::all();
         return view('admin.fAQ.fAQ', compact('fAQs'));
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

        return redirect()->back()->with('status','FAQ Saved Successfully');
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
        return view('admin.fAQ.edit', compact('fAQ'));
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
        return view('admin.fAQ.fAQ')->with('status','FAQ Saved Successfully');
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
        return redirect()->back()->with('status','FAQ Saved Successfully');
    }
}
