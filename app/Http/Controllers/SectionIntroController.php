<?php

namespace App\Http\Controllers;

use App\Models\SectionIntro;
use Illuminate\Http\Request;

class SectionIntroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = SectionIntro::all();
        return view('pages/back_office/section/index', compact('section'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SectionIntro  $sectionIntro
     * @return \Illuminate\Http\Response
     */
    public function show(SectionIntro $sectionIntro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SectionIntro  $sectionIntro
     * @return \Illuminate\Http\Response
     */
    public function edit(SectionIntro $sectionIntro)
    {
        return view('pages/back_office/section/edit', compact('sectionIntro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SectionIntro  $sectionIntro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SectionIntro $sectionIntro)
    {
        $sectionIntro->header = $request->header;
        $sectionIntro->description = $request->description;
        $sectionIntro->save();
        return redirect()->route("section.index")->with("message", "Your updates have been saved.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SectionIntro  $sectionIntro
     * @return \Illuminate\Http\Response
     */
    public function destroy(SectionIntro $sectionIntro)
    {
        //
    }
}
