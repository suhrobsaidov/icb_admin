<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Header::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'title' => 'required|string|max:191',
                'description' => 'required|string|max:191',
                'link' => 'required|string|max:191',
                'sub_title' => 'required|string|max:191',
                'sub_description' => 'required|string|max:191',
                'page' => 'required|string|max:191',
                'language' => 'required|string|max:191',
            ]);
        return Header::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'link' => $request['link'],
            'sub_title' => $request['sub_title'],
            'sub_description' => $request['sub_description'],
            'page' => $request['page'],
            'language' => $request['language'],
        ]);
//        $data = $request->all();
//        if ($request->hasFile('image')) {
//            $image = $request->file('image');
//            $path = $image->store('public/images');
//            $data['image'] = $path;
//        }
//        $response = Header::create($data);
//        return response()->json([
//            'status' => 'success',
//            'data' => $response
//        ], 200);
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
        $header = Header::find($id);

        $this->validate($request,[
                'title' => 'required|string|max:191'.$header->id,
                'description' => 'required|string|max:191',
                'link' => 'required|string|max:191',
                'sub_title' => 'required|string|max:191',
                'sub_description' => 'required|string|max:191',
                'page' => 'required|string|max:191',
                'language' => 'required|string|max:191',
            ]);

        $header->update($request->all());
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
        $header = Header::findOrFail($id);
        $header -> delete();
        return response(200, 'Удалено');
    }
}
