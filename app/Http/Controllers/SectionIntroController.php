<?php

namespace App\Http\Controllers;

use App\Models\Hero;
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
        $hero = Hero::first();
        $section = SectionIntro::all();
        return view('pages/back_office/section_intros/index', compact('hero', 'section'));
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
        return view('pages/back_office/section_intros/edit', compact('sectionIntro'));
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
        $sectionIntro->section_header = $request->section_header;
        $sectionIntro->section_desc = $request->section_desc;
        $sectionIntro->save();
        return redirect()->route("hero.index")->with("message", "Your updates have been saved.");
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
