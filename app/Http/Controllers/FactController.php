<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\SectionIntro;
use Illuminate\Http\Request;

class FactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fact = Fact::all();
        $section = SectionIntro::all();
        return view('pages/fact/index', compact('fact', 'section'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/fact/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fact = new Fact;
        $fact->fact_delay = $request->fact_delay;
        $fact->fact_icon = $request->fact_icon;
        $fact->fact_number = $request->fact_number;
        $fact->fact_title = $request->fact_title;
        $fact->fact_desc = $request->fact_desc;
        return redirect()->route('fact.index')->with('message', 'Your changes have been saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function show(Fact $fact)
    {
        return view('pages/fact/show', compact('fact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function edit(Fact $fact)
    {
        return view('pages/fact/edit', compact('fact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fact $fact)
    {
        $fact->fact_delay = $request->fact_delay;
        $fact->fact_icon = $request->fact_icon;
        $fact->fact_number = $request->fact_number;
        $fact->fact_title = $request->fact_title;
        $fact->fact_desc = $request->fact_desc;
        return redirect()->route('fact.index')->with('message', 'Your changes have been saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fact $fact)
    {
        return view('pages/fact/destroy', compact('fact'));
    }
}
