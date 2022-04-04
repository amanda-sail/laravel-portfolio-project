<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Navbar;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $header = Header::all();
        $navbar = Navbar::all();
        $social_media = SocialMedia::all();
        return view("pages/header/index", compact("header", "navbar", "social_media"));
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
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function show(Header $header)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function edit(Header $header)
    {
        return view("pages/header/edit", compact("header"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Header $header)
    {
        $header->name = $request->name;
        $request->profile_pic->storePublicly('img', 'public');
        $header->profile_pic = "storage/img/" . $request->file('profile_pic')->hashName();
        $header->link_to = $request->link_to;
        $header->save();
        return redirect()->route("header.index")->with("message", "Your changes have been saved.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\Response
     */
    public function destroy(Header $header)
    {
        //
    }
}
