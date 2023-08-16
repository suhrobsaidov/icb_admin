<?php

namespace App\Http\Controllers;

use App\Models\BankServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BankServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bankServices = BankServices::all();
        return view('admin.bankServices.bankServices', compact('bankServices'));
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
        $bankService = new BankServices;
        $bankService->title = $request->input('title');
        $bankService->description = $request->input('description');
        $bankService->page = $request->input('page');
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/bankServices/', $filename);
            $bankService->image = $filename;
        }
        $bankService->link = $request->input('link');
        $bankService->language = $request->input('language');
        $bankService->save();

        return redirect()->back()->with('status','Bank Service Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankServices  $bankService
     * @return \Illuminate\Http\Response
     */
    public function show(BankServices $bankService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankServices  $bankService
     * @return \Illuminate\Http\Response
     */
    public function edit(BankServices $bankService, $id)
    {
        $bankService = BankServices::find($id);
        return view('admin.bankServices.edit', compact('bankService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankServices  $bankService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankServices $bankService, $id)
    {
        $bankService = BankServices::findOrFail($id);
            $bankService->title = $request->input('title');
            $bankService->description = $request->input('description');
            $bankService->page = $request->input('page');
            if($request->hasfile('image'))
                {
                    $destination = 'images/bankServices/'.$bankService->image;
                    if(File::exists($destination)){
                    File::delete($destination);
                    }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('images/bankServices/', $filename);
            $bankService->image = $filename;
                }
            $bankService->link = $request->input('link');
            $bankService->language = $request->input('language');
            $bankService->update();
            return view('admin.bankServices.bankServices')->with('status','Bank Service Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankServices  $bankService
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankServices $bankService, $id)
    {
        $bankService = BankServices::find($id);
        $destination = 'images/bankServices/'.$bankService->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $bankService->delete();
        return redirect()->back()->with('status','bankService Deleted Successfully');
    }
}
