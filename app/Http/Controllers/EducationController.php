<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = auth()->user()->education;
        return view('education.index', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'school_name' => 'required|string',
            'school_location' => 'required|string',
            'degree' => 'required',
            'field_of_study' => 'required|string',
            'graduation_start_date' => 'required|date',
            'graduation_end_date' => 'required|date',

        ]);
        // dd($request->all());

        auth()->user()->education()->create($data);

        return redirect(route('education.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        // dd($education);
        return view('education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $data = $request->validate([
            'school_name' => 'required|string',
            'school_location' => 'required|string',
            'degree' => 'required',
            'field_of_study' => 'required|string',
            'graduation_start_date' => 'required|date',
            'graduation_end_date' => 'required|date',

        ]);
        $education->update($data);
        return view('education.edit', compact('education'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return view('education.index', ['education' => auth()->user()->education]);
    }
}
