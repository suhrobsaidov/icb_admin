<?php

namespace App\Http\Controllers;

use App\Models\Remittances;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RemittancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $remittances = Remittances::all();
        return view('admin.remittances.index', compact('remittances'));
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
        $remittances = new Remittances;
        $remittances->title = $request->input('title');
        $remittances->description = $request->input('description');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/remittances/', $filename);
            $remittances->image = $filename;
        }
        $remittances->save();

        return redirect()->back()->with('status','Запись добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Remittances  $remittances
     * @return \Illuminate\Http\Response
     */
    public function show(Remittances $remittances)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Remittances  $remittances
     * @return \Illuminate\Http\Response
     */
    public function edit(Remittances $remittances, $id)
    {
        $remittances = Remittances::find($id);
        return view('admin.remittances.edit', compact('remittances'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Remittances  $remittances
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Remittances $remittances, $id)
    {
        $remittances = Remittances::findOrFail($id);
        $remittances->title = $request->input('title');
        $remittances->description = $request->input('description');
        if ($request->hasfile('image')) {
            $destination = 'images/remittances/' . $remittances->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/remittances/', $filename);
            $remittances->image = $filename;
        }
        $remittances->update();
        return view('admin.remittances.index')->with('status', 'Header updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Remittances  $remittances
     * @return \Illuminate\Http\Response
     */
    public function destroy(Remittances $remittances, $id)
    {
        $remittances = Remittances::find($id);
        $destination = 'images/remittances/' . $remittances->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $remittances->delete();
        return redirect()->back()->with('status', 'Header Deleted Successfully');
    }
}
