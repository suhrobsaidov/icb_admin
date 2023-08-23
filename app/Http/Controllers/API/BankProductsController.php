<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BankProducts;
use Illuminate\Http\Request;

class BankProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return BankProducts::latest()->paginate(10);
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
                'link' => 'required|string|max:191',
            ]
        );
        return BankProducts::create([
            'title' => $request['title'],
            'link' => $request['link'],
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
        $bankproducts = BankProducts::find($id);

        $this->validate($request,[
            'title' => 'required|string|max:191'.$bankproducts->id,
            'link' => 'required|string|max:191',
        ]);

        $bankproducts->update($request->all());
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
        $bankproducts = BankProducts::findOrFail($id);
        $bankproducts->delete();
        return response(200, 'Deleted');
    }
}
