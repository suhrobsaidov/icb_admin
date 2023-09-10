<?php

namespace App\Http\Controllers;

use App\Models\BankCards;
use Illuminate\Http\Request;

class BankCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('bankcards');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankCards  $bankCards
     * @return \Illuminate\Http\Response
     */
    public function show(BankCards $bankCards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankCards  $bankCards
     * @return \Illuminate\Http\Response
     */
    public function edit(BankCards $bankCards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankCards  $bankCards
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankCards $bankCards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankCards  $bankCards
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankCards $bankCards)
    {
        //
    }
}
