<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DepositCards;
use Illuminate\Http\Request;

class DepositCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DepositCards::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'title' => 'required|string|max:191',
                'description' => 'required|string|max:191',
                'link' => 'required|string|max:191',
                'maintenance' => 'required|string|max:191',
                'security' => 'required|string|max:191',
                'access' => 'required|string|max:191',
                'commission' => 'required|string|max:191',
                'time' => 'required|string|max:191',
                'money' => 'required|string|max:191',
            ]
        );
        return DepositCards::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'link' => $request['link'],
            'maintenance' => $request['maintenance'],
            'security' => $request['security'],
            'access' => $request['access'],
            'commission' => $request['commission'],
            'time' => $request['time'],
            'money' => $request['money'],

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $depositcards = DepositCards::find($id);

        $this->validate($request,[
            'title' => 'required|string|max:191'.$depositcards->id,
            'description' => 'required|string|max:191',
            'link' => 'required|string|max:191',
            'maintenance' => 'required|string|max:191',
            'security' => 'required|string|max:191',
            'access' => 'required|string|max:191',
            'commission' => 'required|string|max:191',
            'time' => 'required|string|max:191',
            'money' => 'required|string|max:191',
        ]);

        $depositcards->update($request->all());
        return response(200, 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depositcards = DepositCards::findOrFail($id);
        $depositcards -> delete();
        return response(200,'Deleted');
    }
}
