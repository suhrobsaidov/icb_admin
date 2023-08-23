<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vacancy::latest()->paginate(10);
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
                'phone' => 'required|string|max:191',
            ]
        );
        return Vacancy::create([
            'surname' => $request['surname'],
            'name' => $request['name'],
            'middle_name' => $request['middle_name'],
            'e_mail' => $request['e_mail'],
            'phone' => $request['phone'],
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
        $vacancy = Vacancy::find($id);

        $this->validate($request,[
            'surname' => 'required|string|max:191'.$vacancy->id,
            'name' => 'required|string|max:191',
            'middle_name' => 'required|string|max:191',
            'e_mail' => 'required|string|max:191',
            'phone' => 'required|string|max:191',
        ]);

        $vacancy->update($request->all());
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
        $vacancy = Vacancy::findOrFail($id);
        $vacancy->delete();
        return response(200, 'Deleted');
    }
}
