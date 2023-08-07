<?php

namespace App\Http\Controllers;

use App\Models\TermDepositsForm;
use Illuminate\Http\Request;

class TermDepositsFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = TermDepositsForm::all();
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
        $form = new TermDepositsForm();
        $form->surname = $request->input('surname');
        $form->name = $request->input('name');
        $form->middle_name = $request->input('middle_name');
        $form->e_mail = $request->input('e_mail');
        $form->phone_number = $request->input('phone_number');
        $form->additional_phone_number = $request->input('additional_phone_number');
        $form->save();
        return response('nice' , 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TermDepositsForm  $termDepositsForm
     * @return \Illuminate\Http\Response
     */
    public function show(TermDepositsForm $termDepositsForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TermDepositsForm  $termDepositsForm
     * @return \Illuminate\Http\Response
     */
    public function edit(TermDepositsForm $termDepositsForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TermDepositsForm  $termDepositsForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TermDepositsForm $termDepositsForm, $id)
    {
        $form = TermDepositsForm::findOrFail($id);
        $form->surname = $request->input('surname');
        $form->name = $request->input('name');
        $form->middle_name = $request->input('middle_name');
        $form->e_mail = $request->input('e_mail');
        $form->phone_number = $request->input('phone_number');
        $form->additional_phone_number = $request->input('additional_phone_number');
        $form->update();
        return response('nice' , 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TermDepositsForm  $termDepositsForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(TermDepositsForm $termDepositsForm, $id)
    {
        $form = TermDepositsForm::find($id);
        $form->destroy();
        return response('delete', 200);
    }
}
