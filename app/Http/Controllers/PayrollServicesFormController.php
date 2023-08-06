<?php

namespace App\Http\Controllers;

use App\Models\PayrollServicesForm;
use Illuminate\Http\Request;

class PayrollServicesFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = PayrollServicesForm::all();
        return response($form);
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
        $form = new PayrollServicesForm();
        $form->surname = $request->input('surname');
        $form->name = $request->input('name');
        $form->middle_name = $request->input('middle_name');
        $form->e_mail = $request->input('e_mail');
        $form->phone_number = $request->input('phone_number');
        $form->city_district = $request->input('city_district');
        $form->save();
        return response('nice' , 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PayrollServicesForm  $payrollServicesForm
     * @return \Illuminate\Http\Response
     */
    public function show(PayrollServicesForm $payrollServicesForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayrollServicesForm  $payrollServicesForm
     * @return \Illuminate\Http\Response
     */
    public function edit(PayrollServicesForm $payrollServicesForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayrollServicesForm  $payrollServicesForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayrollServicesForm $payrollServicesForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayrollServicesForm  $payrollServicesForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayrollServicesForm $payrollServicesForm)
    {
        //
    }
}
