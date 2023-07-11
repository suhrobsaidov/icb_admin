<?php

namespace App\Http\Controllers;

use App\Models\BankLoans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BankLoansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bankLoans = BankLoans::all();
        return view('admin.BankLoans.BankLoans', compact('bankLoans'));
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
        $bankLoans = new BankLoans;
        $bankLoans->title = $request->input('title');
        $bankLoans->description = $request->input('description');
        $bankLoans->link = $request->input('link');
        $bankLoans->maintense = $request->input('maintense');
        $bankLoans->security = $request->input('security');
        $bankLoans->access = $request->input('access');
        $bankLoans->commission = $request->input('commission');
        $bankLoans->time = $request->input('time');
        $bankLoans->money = $request->input('money');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/bankLoans/', $filename);
            $bankLoans->image = $filename;
        }
        $bankLoans->save();

        return redirect()->back()->with('status','Offer Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankLoans  $bankLoans
     * @return \Illuminate\Http\Response
     */
    public function show(BankLoans $bankLoans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankLoans  $bankLoans
     * @return \Illuminate\Http\Response
     */
    public function edit(BankLoans $bankLoans, $id)
    {
        $bankLoans = BankLoans::find($id);
        return view('admin.BankLoans.edit', compact('bankLoans'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankLoans  $bankLoans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankLoans $bankLoans, $id)
    {
        $bankLoans = BankLoans::findOrFail($id);
        $bankLoans->title = $request->input('title');
        $bankLoans->description = $request->input('description');
        $bankLoans->link = $request->input('link');
        $bankLoans->maintense = $request->input('maintense');
        $bankLoans->security = $request->input('security');
        $bankLoans->access = $request->input('access');
        $bankLoans->commission = $request->input('commission');
        $bankLoans->time = $request->input('time');
        $bankLoans->money = $request->input('money');

        if($request->hasfile('image'))
        {
            $destination = 'images/bankLoans/'.$bankLoans->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/bankLoans/', $filename);
            $bankLoans->image = $filename;
        }
        $bankLoans->update();
        return view('admin.BankLoans.BankLoans')->with('status', 'Offer updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankLoans  $bankLoans
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankLoans $bankLoans, $id)
    {
        $bankLoans = BankLoans::find($id);
        $destination = 'images/bankLoans/'.$bankLoans->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $bankLoans->delete();
        return redirect()->back()->with('status','Card Deleted Successfully');
    }
}
