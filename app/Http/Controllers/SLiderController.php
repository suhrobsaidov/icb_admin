<?php

namespace App\Http\Controllers;

use App\SLider;
use Illuminate\Http\Request;

class SLiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $slider = SLider::all()->first('4');
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
        $slider = new SLider();
            $slider->title =$request->input('title');
         $slider->desc =$request->input('desc');
          $slider->subtitle =$request->input('subtitle');
           $slider->img =$request->file('image');
            $slider->subdesc =$request->input('subdesc');
             $slider->link =$request->input('link');
             $slider->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SLider  $sLider
     * @return \Illuminate\Http\Response
     */
    public function show(SLider $sLider)
    {
       $slider =SLider::find($sLider);
       return $slider;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SLider  $sLider
     * @return \Illuminate\Http\Response
     */
    public function edit(SLider $sLider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SLider  $sLider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SLider $sLider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SLider  $sLider
     * @return \Illuminate\Http\Response
     */
    public function destroy(SLider $sLider)
    {
        $slider = SLider::find($sLider);
        $slider->delete();

    }
}
