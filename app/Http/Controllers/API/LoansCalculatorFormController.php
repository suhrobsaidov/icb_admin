<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\LoansCalculatorForm;
use Illuminate\Http\Request;

class LoansCalculatorFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LoansCalculatorForm::latest()->paginate(10);
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
                'loan_product' => 'required|string|max:191',
                'loan_currency' => 'required|string|max:191',
                'loan_amount' => 'required|string|max:191',
                'loan_term' => 'required|string|max:191',
                'loan_purpose' => 'required|string|max:191',
                'occupation' => 'required|string|max:191',
                'city_district' => 'required|string|max:191',
                'region' => 'required|string|max:191',
                'address_where_registered' => 'required|string|max:191',
                'monthly_family_income' => 'required|string|max:191',
                'branch' => 'required|string|max:191',
                'phone_number_for' => 'required|string|max:191',
            ]
        );
        return LoansCalculatorForm::create([
            'surname' => $request['surname'],
            'name' => $request['name'],
            'middle_name' => $request['middle_name'],
            'e_mail' => $request['e_mail'],
            'phone_number' => $request['phone_number'],
            'additional_phone_number' => $request['additional_phone_number'],
            'loan_product' => $request['loan_product'],
            'loan_currency' => $request['loan_currency'],
            'loan_amount' => $request['loan_amount'],
            'loan_term' => $request['loan_term'],
            'loan_purpose' => $request['loan_purpose'],
            'occupation' => $request['occupation'],
            'city_district' => $request['city_district'],
            'region' => $request['region'],
            'address_where_registered' => $request['address_where_registered'],
            'monthly_family_income' => $request['monthly_family_income'],
            'branch' => $request['branch'],
            'phone_number_for' => $request['phone_number_for'],

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
        $loanscalculatorform = LoansCalculatorForm::find($id);

        $this->validate($request,[
            'surname' => 'required|string|max:191'.$loanscalculatorform->id,
            'name' => 'required|string|max:191',
            'middle_name' => 'required|string|max:191',
            'e_mail' => 'required|string|max:191',
            'phone_number' => 'required|string|max:191',
            'additional_phone_number' => 'required|string|max:191',
            'loan_product' => 'required|string|max:191',
            'loan_currency' => 'required|string|max:191',
            'loan_amount' => 'required|string|max:191',
            'loan_term' => 'required|string|max:191',
            'loan_purpose' => 'required|string|max:191',
            'occupation' => 'required|string|max:191',
            'city_district' => 'required|string|max:191',
            'region' => 'required|string|max:191',
            'address_where_registered' => 'required|string|max:191',
            'monthly_family_income' => 'required|string|max:191',
            'branch' => 'required|string|max:191',
            'phone_number_for' => 'required|string|max:191',
        ]);

        $loanscalculatorform->update($request->all());
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
        $loanscalculatorform = LoansCalculatorForm::findOrFail($id);
        $loanscalculatorform -> delete();
        return response(200, 'Удалено');
    }
}
