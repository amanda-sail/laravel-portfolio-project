<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Navbar;
use App\Models\SocialMedia;
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
     * @param  \App\Models\SocialMedia  $social_media
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMedia $social_media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Social_media  $social_media
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMedia $social_media)
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
    public function update(Request $request, SocialMedia $social_media)
    {
        $social_media->media_class = $request->media_class;
        $social_media->media_link = $request->media_link;
        $social_media->media_icon = $request->media_icon;
        $social_media->save();
        return redirect()->route("header.index")->with("message", "Your changes have been saved.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialMedia  $social_media
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $social_media)
    {
        //
    }
}
