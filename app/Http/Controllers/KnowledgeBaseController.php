<?php

namespace App\Http\Controllers;

use App\Models\KnowledgeBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KnowledgeBaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $knowledgeBase = KnowledgeBase::all();
        return view('admin.knowledgeBase.index', compact('knowledgeBase'));
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
        $knowledgeBase = new KnowledgeBase;
        $knowledgeBase->link = $request->input('link');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/knowledgeBase/', $filename);
            $knowledgeBase->image = $filename;
        }
        $knowledgeBase->save();

        return redirect()->back()->with('status','Запись добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KnowledgeBase  $knowledgeBase
     * @return \Illuminate\Http\Response
     */
    public function show(KnowledgeBase $knowledgeBase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KnowledgeBase  $knowledgeBase
     * @return \Illuminate\Http\Response
     */
    public function edit(KnowledgeBase $knowledgeBase, $id)
    {
        $knowledgeBase = KnowledgeBase::find($id);
        return view('admin.knowledgeBase.edit', compact('knowledgeBase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KnowledgeBase  $knowledgeBase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KnowledgeBase $knowledgeBase, $id)
    {
        $knowledgeBase = KnowledgeBase::findOrFail($id);
        $knowledgeBase->link = $request->input('link');
        if ($request->hasfile('image')) {
            $destination = 'images/knowledgeBase/' . $knowledgeBase->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/knowledgeBase/', $filename);
            $knowledgeBase->image = $filename;
        }
        $knowledgeBase->update();
        return view('admin.knowledgeBase.index')->with('status', 'Header updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KnowledgeBase  $knowledgeBase
     * @return \Illuminate\Http\Response
     */
    public function destroy(KnowledgeBase $knowledgeBase, $id)
    {
        $knowledgeBase = KnowledgeBase::find($id);
        $destination = 'images/knowledgeBase/' . $knowledgeBase->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $knowledgeBase->delete();
        return redirect()->back()->with('status', 'Header Deleted Successfully');
    }
}
