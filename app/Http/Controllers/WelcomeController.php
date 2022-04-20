<?php

namespace App\Http\Controllers;


use App\Models\Header;
use App\Models\Navbar;
use App\Models\SocialMedia;
use App\Models\Hero;
use App\Models\SectionIntro;
use App\Models\About;
use App\Models\Fact;
use App\Models\Skill;
use App\Models\Portfolio;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Footer;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $header = Header::first();
        $navbar = Navbar::all();
        $social_media = SocialMedia::all();
        $hero = Hero::first();
        $section = SectionIntro::all();
        $about = About::first();
        $facts = Fact::all();
        $skills = Skill::all();
        $portfolio = Portfolio::all();
        $testimonial = Testimonial::first();
        $contact = Contact::first();
        $footer = Footer::first();

        return view('welcome', compact('header', 'navbar', 'social_media', 'hero', 'section', 'about', 'facts', 'skills', 'portfolio', 'testimonial', 'contact', 'footer'));
    }
}
