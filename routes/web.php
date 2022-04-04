<?php

use App\Http\Controllers\HeaderController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\SectionIntroController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
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
    $navbar = Navbar::all();
    $social_media = SocialMedia::all();
    $hero = Hero::first();
    $section = SectionIntro::all();
    $about = About::first();
    $fact = Fact::first();
    $skill = Skill::first();
    $portfolio = Portfolio::first();
    $testimonial = Testimonial::first();
    $contact = Contact::first();
    $footer = Footer::first();
    return view('welcome', compact('header', 'navbar', 'social_media', 'hero', 'section', 'about', 'fact', 'skill', 'portfolio', 'testimonial', 'contact', 'footer'));
});


// Back Office
Route::get('/back_office/backoffice', function() {
    return view('pages/back_office/backoffice');
});

// Header
Route::get('/back_office/backoffice/header', [HeaderController::class, "index"])->name("header.index");
Route::get('/back_office/backoffice/header/edit/{header}', [HeaderController::class, "edit"])->name("header.edit");
Route::post('/back_office/backoffice/header/update/{header}', [HeaderController::class, "update"])->name("header.update");

// Navbar
Route::get('/back_office/backoffice/navbar/edit/{navbar}', [NavbarController::class, "edit"])->name("navbar.edit");
Route::post('/back_office/backoffice/navbar/update/{navbar}', [NavbarController::class, "update"])->name("navbar.update");

// Social Media
Route::get('/back_office/backoffice/social_media/edit/{social_media}', [SocialMediaController::class, "edit"])->name("social_media.edit");
Route::post('/back_office/backoffice/social_media/update/{social_media}', [SocialMediaController::class, "update"])->name("social_media.update");

// Hero
Route::get('/back_office/backoffice/hero', [HeroController::class, "index"])->name("hero.index");
Route::get('/back_office/backoffice/hero/edit/{id}', [HeroController::class, "edit"])->name("hero.edit");
Route::post('/back_office/backoffice/hero/update/{id}', [HeroController::class, "update"])->name("hero.update");

// Section Intros
Route::get('/back_office/backoffice/section', [SectionIntroController::class, "index"])->name("section.index");
Route::get('/back_office/backoffice/section/edit/{id}', [SectionIntroController::class, "edit"])->name("section.edit");
Route::post('/back_office/backoffice/section/update/{id}', [SectionIntroController::class, "update"])->name("section.update");

// About
Route::get('/back_office/backoffice/about', [AboutController::class, "index"])->name("about.index");
Route::get('/back_office/backoffice/about/edit/{id}', [AboutController::class, "edit"])->name("about.edit");
Route::post('/back_office/backoffice/about/update/{id}', [AboutController::class, "update"])->name("about.update");

// Fact
Route::get('/back_office/backoffice/fact', [FactController::class, "index"])->name("fact.index");
Route::get('/back_office/backoffice/fact/edit/{id}', [FactController::class, "edit"])->name("fact.edit");
Route::post('/back_office/backoffice/fact/update/{id}', [FactController::class, "update"])->name("fact.update");
Route::get('/back_office/backoffice/fact/create', [FactController::class, "create"])->name("fact.create");
Route::post('/back_office/backoffice/fact/store', [FactController::class, "store"])->name("fact.store");
Route::get('/back_office/backoffice/fact/destroy/{id}', [FactController::class, "destroy"])->name("fact.destroy");
Route::get('/back_office/backoffice/fact/show/{id}', [FactController::class, "show"])->name("fact.show");

// Skill
Route::get('/back_office/backoffice/skill', [SkillController::class, "index"])->name("skill.index");
Route::get('/back_office/backoffice/skill/edit/{id}', [SkillController::class, "edit"])->name("skill.edit");
Route::post('/back_office/backoffice/skill/update/{id}', [SkillController::class, "update"])->name("skill.update");
Route::get('/back_office/backoffice/skill/create', [SkillController::class, "create"])->name("skill.create");
Route::post('/back_office/backoffice/skill/store', [SkillController::class, "store"])->name("skill.store");
Route::get('/back_office/backoffice/skill/destroy/{id}', [SkillController::class, "destroy"])->name("skill.destroy");
Route::get('/back_office/backoffice/skill/show/{id}', [SkillController::class, "show"])->name("skill.show");

// Portfolio
Route::get('/back_office/backoffice/portfolio', [PortfolioController::class, "index"])->name("portfolio.index");
Route::get('/back_office/backoffice/portfolio/edit/{id}', [PortfolioController::class, "edit"])->name("portfolio.edit");
Route::post('/back_office/backoffice/portfolio/update/{id}', [PortfolioController::class, "update"])->name("portfolio.update");
Route::get('/back_office/backoffice/portfolio/create', [PortfolioController::class, "create"])->name("portfolio.create");
Route::post('/back_office/backoffice/portfolio/store', [PortfolioController::class, "store"])->name("portfolio.store");
Route::get('/back_office/backoffice/portfolio/destroy/{id}', [PortfolioController::class, "destroy"])->name("portfolio.destroy");
Route::get('/back_office/backoffice/portfolio/show/{id}', [PortfolioController::class, "show"])->name("portfolio.show");

// Testimonial
Route::get('/back_office/backoffice/testimonial', [TestimonialController::class, "index"])->name("testimonial.index");
Route::get('/back_office/backoffice/testimonial/edit/{id}', [TestimonialController::class, "edit"])->name("testimonial.edit");
Route::post('/back_office/backoffice/testimonial/update/{id}', [TestimonialController::class, "update"])->name("testimonial.update");
Route::get('/back_office/backoffice/testimonial/create', [TestimonialController::class, "create"])->name("testimonial.create");
Route::post('/back_office/backoffice/testimonial/store', [TestimonialController::class, "store"])->name("testimonial.store");
Route::get('/back_office/backoffice/testimonial/destroy/{id}', [TestimonialController::class, "destroy"])->name("testimonial.destroy");
Route::get('/back_office/backoffice/testimonial/show/{id}', [TestimonialController::class, "show"])->name("testimonial.show");

// Contact
Route::get('/back_office/backoffice/contact', [ContactController::class, "index"])->name("contact.index");

// Footer
Route::get('/back_office/backoffice/footer', [FooterController::class, "index"])->name("footer.index");
Route::get('/back_office/backoffice/footer/edit/{id}', [FooterController::class, "edit"])->name("footer.edit");
Route::post('/back_office/backoffice/footer/update/{id}', [FooterController::class, "update"])->name("footer.update");