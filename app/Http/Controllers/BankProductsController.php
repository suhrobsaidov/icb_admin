<?php

namespace App\Http\Controllers;

use App\Models\BankProducts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BankProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bankProducts = BankProducts::all();
        return view('admin.bankProducts.bankProducts', compact('bankProducts'));
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
        $bankProducts = new BankProducts;
        $bankProducts->title = $request->input('title');

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/bankProducts/', $filename);
            $bankProducts->image = $filename;
        }
        $bankProducts->save();

        return redirect()->back()->with('status','Product Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BankProducts  $bankProducts
     * @return \Illuminate\Http\Response
     */
    public function show(BankProducts $bankProducts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BankProducts  $bankProducts
     * @return \Illuminate\Http\Response
     */
    public function edit(BankProducts $bankProducts, $id)
    {
        $bankProducts = BankProducts::find($id);
        return view('edit-bankProducts', compact('bankProducts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BankProducts  $bankProducts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankProducts $bankProducts, $id)
    {
        $bankProducts = BankProducts::findOrFail($id);
        $bankProducts->title = $request->input('title');

        if($request->hasfile('image'))
        {
            $destination = 'images/bankProducts/'.$bankProducts->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/bankProducts/', $filename);
            $bankProducts->image = $filename;
        }
        $bankProducts->update();
        return redirect()->back()->with('status', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BankProducts  $bankProducts
     * @return \Illuminate\Http\Response
     */
    public function destroy(BankProducts $bankProducts, $id)
    {
        $bankProducts = BankProducts::find($id);
        $destination = 'images/bankProducts/'.$bankProducts->image;
        if(File::exists($destination)){
            File::delete($destination);
        }
        $bankProducts->delete();
        return redirect()->back()->with('status','Product Deleted Successfully');
    }
}
