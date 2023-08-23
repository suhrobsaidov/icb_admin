<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BankServices;
use Illuminate\Http\Request;

class BankServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BankServices::latest()->paginate(10);

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
                'page' => 'required|string|max:191',
                'language' => 'required|string|max:191',
            ]
        );
        return BankServices::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'link' => $request['link'],
            'page' => $request['page'],
            'language' => $request['language'],
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
        $bankservices = BankServices::find($id);

        $this->validate($request,[
            'title' => 'required|string|max:191'.$bankservices->id,
            'description' => 'required|string|max:191',
            'link' => 'required|string|max:191',
            'page' => 'required|string|max:191',
            'language' => 'required|string|max:191',
        ]);

        $bankservices->update($request->all());
        return response(200, 'Updated');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bankservices = BankServices::findOrFail($id);
        $bankservices->delete();
        return response(200, 'Deleted');
    }
}
