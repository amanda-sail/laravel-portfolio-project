<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Navbar;
use App\Models\Social_media;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $header = Header::all();
        $navbar = Navbar::all();
        $social_media = Social_media::all();
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
     * @param  \App\Models\Social_media  $social_media
     * @return \Illuminate\Http\Response
     */
    public function show(Social_media $social_media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Social_media  $social_media
     * @return \Illuminate\Http\Response
     */
    public function edit(Social_media $social_media)
    {
        return view("pages/back_office/social_media/edit", compact("social_media"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Social_media  $social_media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social_media $social_media)
    {
        $social_media->nav_name = $request->nav_name;
        $social_media->nav_to = $request->nav_to;
        $social_media->nav_icon = $request->nav_icon;
        $social_media->save();
        return redirect()->route("header.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Social_media  $social_media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social_media $social_media)
    {
        //
    }
}
