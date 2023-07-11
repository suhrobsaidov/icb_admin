<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headers = Header::all();
        return view('admin.header.header', compact('headers'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $headers = new Header;
        $headers->title = $request->input('title');
        $headers->description = $request->input('description');
        $headers->page = $request->input('page');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/headers/', $filename);
            $headers->image = $filename;
        }
        $headers->link = $request->input('link');
        $headers->language = $request->input('language');
        $headers->save();

        return view('admin.header.header')->with('status','Запись добавлена');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Header $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Header $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header, $id)
    {
        $header = Header::find($id);
        return view('admin.header.edit-header', compact('header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Header $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header, $id)
    {
        $header = Header::findOrFail($id);
        $header->title = $request->input('title');
        $header->description = $request->input('description');
        $header->page = $request->input('page');
        if ($request->hasfile('image')) {
            $destination = 'images/headers/' . $header->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/headers/', $filename);
            $header->image = $filename;
        }
        $header->link = $request->input('link');
        $header->language = $request->input('language');
        $header->update();
        return view('admin.header.header')->with('status', 'Header updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Header $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header, $id)
    {
        $header = Header::find($id);
        $destination = 'images/headers/' . $header->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $header->delete();
        return redirect()->back()->with('status', 'Header Deleted Successfully');
    }
}
