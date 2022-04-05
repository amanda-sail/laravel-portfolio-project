<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Hero;
use App\Models\SectionIntro;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::first();
        $hero = Hero::first();
        $sectionIntro = SectionIntro::all();
        return view("pages/hero/index", compact("header", "hero", "sectionIntro"))->with("message", "This section has been updated.");
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
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        $header = Header::first();
        return view("pages/hero/edit", compact("hero", "header"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'job_titles' => 'required',
        ]);
        $hero->job_titles = $request->job_titles;
        $hero->save();
        return redirect()->route("hero.index")->with("message", "Your changes have been saved.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        //
    }
}
