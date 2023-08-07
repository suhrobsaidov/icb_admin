<?php

namespace App\Http\Controllers;

use App\Models\LoansCalculatorForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LoansCalculatorFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = LoansCalculatorForm::all();
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
        $form = new LoansCalculatorForm();
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
            $file->move('images/loansCalculator/', $filename);
            $form->photo = $filename;
        }
        if($request->hasfile('passport'))
        {
            $file = $request->file('passport');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/loansCalculator/', $filename);
            $form->passport = $filename;
        }
        if($request->hasfile('other_documents'))
        {
            $file = $request->file('other_documents');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/loansCalculator/', $filename);
            $form->other_documents = $filename;
        }
        $form->save();
        return response('nice' , 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoansCalculatorForm  $loansCalculatorForm
     * @return \Illuminate\Http\Response
     */
    public function show(LoansCalculatorForm $loansCalculatorForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoansCalculatorForm  $loansCalculatorForm
     * @return \Illuminate\Http\Response
     */
    public function edit(LoansCalculatorForm $loansCalculatorForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoansCalculatorForm  $loansCalculatorForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form = LoansCalculatorForm::findOrFail($id);
        $form->surname = $request->input('surname');
        $form->name = $request->input('name');
        $form->middle_name = $request->input('middle_name');
        $form->e_mail = $request->input('e_mail');
        $form->phone_number = $request->input('phone_number');
        $form->additional_phone_number = $request->input('additional_phone_number');
        $form->loan_product = $request->input('loan_product');
        $form->loan_currency = $request->input('loan_currency');
        $form->loan_amount = $request->input('loan_amount');
        $form->loan_term = $request->input('loan_term');
        $form->loan_purpose = $request->input('loan_purpose');
        $form->occupation = $request->input('occupation');
        $form->city_district = $request->input('city_district');
        $form->region = $request->input('region');
        $form->address_where_registered = $request->input('address_where_registered');
        $form->monthly_family_income = $request->input('monthly_family_income');
        $form->branch = $request->input('branch');
        $form->phone_number_for = $request->input('phone_number_for');
        if ($request->hasfile('photo')) {
            $destination = 'images/loansCalculator/' . $form->photo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/loansCalculator/', $filename);
            $form->photo = $filename;
        }
            if ($request->hasfile('passport')) {
                $destination = 'images/loansCalculator/' . $form->passport;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('passport');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images/loansCalculator/', $filename);
                $form->passport = $filename;
            }
            if ($request->hasfile('other_documents')) {
                $destination = 'images/loansCalculator/' . $form->other_documents;
                if (File::exists($destination)) {
                    File::delete($destination);
                }
                $file = $request->file('other_documents');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images/loansCalculator/', $filename);
                $form->other_documents = $filename;
            }
        $form->update();
        return response('update' , 200);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoansCalculatorForm  $loansCalculatorForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoansCalculatorForm $loansCalculatorForm, $id)
    {
        $form = LoansCalculatorForm::find($id);
        $destination = 'images/loansCalculator/'.$form->photo;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $form = LoansCalculatorForm::find($id);
        $destination = 'images/loansCalculator/'.$form->passport;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $form = LoansCalculatorForm::find($id);
        $destination = 'images/loansCalculator/'.$form->other_documents;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $form->delete();
        return response('delete' , 200);
    }
}
