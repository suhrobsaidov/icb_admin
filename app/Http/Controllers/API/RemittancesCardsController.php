<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\RemittancesCards;
use Illuminate\Http\Request;

class RemittancesCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RemittancesCards::latest()->paginate(10);
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
                'link' => 'required|string|max:191'
            ]
        );
        return RemittancesCards::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'link' => $request['link']

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
        $remittancescards = RemittancesCards::find($id);

        $this->validate($request,[
            'title' => 'required|string|max:191'.$remittancescards->id,
            'description' => 'required|string|max:191',
            'link' => 'required|string|max:191',
        ]);

        $remittancescards->update($request->all());
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
        $remittancescards = RemittancesCards::findOrFail($id);
        $remittancescards->delete();
        return response(200, 'Deleted');
    }
}
