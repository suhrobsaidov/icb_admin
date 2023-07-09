<?php

namespace App\Http\Controllers;

use App\Models\BankService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BankServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bankService = BankService::all();
        // return view('bankService', compact('bankService'));
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
        $bankService = new BankService;
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

        //return view('/save-bankService')->with('status', 'bankService saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankService  $bankService
     * @return \Illuminate\Http\Response
     */
    public function show(BankService $bankService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankService  $bankService
     * @return \Illuminate\Http\Response
     */
    public function edit(BankService $bankService, $id)
    {
        $bankService = BankService::find($id);
        //return view('edit-bankService', compact('bankService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankService  $bankService
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankService $bankService, $id)
    {
        $bankService = BankService::findOrFail($id);
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
            //return view('/update-bankService')->with('status', 'bankService updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankService  $bankService
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankService $bankService, $id)
    {
        $bankService = BankService::find($id);
        $destination = 'images/bankServices/'.$bankService->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $bankService->delete();
        //return redirect('bankService')->back()->with('status','bankService Deleted Successfully');
    }
}
