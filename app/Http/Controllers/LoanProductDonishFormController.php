<?php

namespace App\Http\Controllers;

use App\Models\LoanProductDonishForm;
use Illuminate\Http\Request;

class LoanProductDonishFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = LoanProductDonishForm::all();
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
        $form = new LoanProductDonishForm();
        $form->surname = $request->input('surname');
        $form->name = $request->input('name');
        $form->middle_name = $request->input('middle_name');
        $form->e_mail = $request->input('e_mail');
        $form->phone_number = $request->input('phone_number');
        $form->additional_phone_number = $request->input('additional_phone_number');
        $form->loan_product = $request->input('loan_product');
        $form->loan_currency = $request->input('loan_currency');
        $form->loan_amount = $request->input('loan_amount');
        $form-> loan_term = $request->input('loan_term');
        $form-> loan_purpose = $request->input('loan_purpose');
        $form-> occupation = $request->input('occupation');
        $form-> city_district = $request->input('city_district');
        $form-> region = $request->input('region');
        $form-> address_where_registered = $request->input('address_where_registered');
        $form-> monthly_family_income = $request->input('monthly_family_income');
        $form-> branch = $request->input('branch');
        $form-> phone_number_for = $request->input('phone_number_for');
        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/loanProductDonish/', $filename);
            $form->photo = $filename;
        }
        if($request->hasfile('passport'))
        {
            $file = $request->file('passport');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/loanProductDonish/', $filename);
            $form->passport = $filename;
        }
        if($request->hasfile('other_documents'))
        {
            $file = $request->file('other_documents');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/loanProductDonish/', $filename);
            $form->other_documents = $filename;
        }
        $form->save();
        return response('nice' , 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoanProductDonishForm  $loanProductDonishForm
     * @return \Illuminate\Http\Response
     */
    public function show(LoanProductDonishForm $loanProductDonishForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoanProductDonishForm  $loanProductDonishForm
     * @return \Illuminate\Http\Response
     */
    public function edit(LoanProductDonishForm $loanProductDonishForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoanProductDonishForm  $loanProductDonishForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoanProductDonishForm $loanProductDonishForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoanProductDonishForm  $loanProductDonishForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoanProductDonishForm $loanProductDonishForm)
    {
        //
    }
}
