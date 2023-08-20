<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DepositCalculatorForm;
use Illuminate\Http\Request;

class DepositCalculatorFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return DepositCalculatorForm::latest()->paginate(10);
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
                'surname' => 'required|string|max:191',
                'name' => 'required|string|max:191',
                'middle_name' => 'required|string|max:191',
                'e_mail' => 'required|string|max:191',
                'phone_number' => 'required|string|max:191',
                'additional_phone_number' => 'required|string|max:191',
            ]
        );
        return DepositCalculatorForm::create([
            'surname' => $request['surname'],
            'name' => $request['name'],
            'middle_name' => $request['middle_name'],
            'e_mail' => $request['e_mail'],
            'phone_number' => $request['phone_number'],
            'additional_phone_number' => $request['additional_phone_number'],
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
