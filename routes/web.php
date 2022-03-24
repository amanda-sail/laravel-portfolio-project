<?php

use App\Models\Header;
use App\Models\Hero;
use App\Models\About;
use App\Models\Fact;
use App\Models\Skill;
use App\Models\Resume;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Contact;
use App\Models\Footer;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $header = Header::first();
    $hero = Hero::first();
    $about = About::first();
    $fact = Fact::first();
    $skill = Skill::first();
    $resume = Resume::first();
    $portfolio = Portfolio::first();
    $service = Service::first();
    $testimonial = Testimonial::first();
    $contact = Contact::first();
    $footer = Footer::first();
    return view('welcome', compact('header', 'hero', 'about', 'fact', 'skill', 'resume', 'portfolio', 'service', 'testimonial', 'contact', 'footer'));
});
