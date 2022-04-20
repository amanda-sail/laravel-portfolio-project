<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'delay' => '',
            'comment' => 'Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
            Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.',
            'image' => 'img/testimonials/testimonials-1.jpg',
            'commenter' => 'Saul Goodman',
            'job' => 'Ceo & Founder',
        ]);
        DB::table('testimonials')->insert([
            'delay' => '100',
            'comment' => 'Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
            eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
            culpa.',
            'image' => 'img/testimonials/testimonials-2.jpg',
            'commenter' => 'Sara Wilsson',
            'job' => 'Designer',
        ]);
        DB::table('testimonials')->insert([
            'delay' => '200',
            'comment' => 'Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
            minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.',
            'image' => 'img/testimonials/testimonials-3.jpg',
            'commenter' => 'Jena Karlis',
            'job' => 'Store Owner',
        ]);
        DB::table('testimonials')->insert([
            'delay' => '300',
            'comment' => 'Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
            velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
            veniam.',
            'image' => 'img/testimonials/testimonials-4.jpg',
            'commenter' => 'Matt Brandon',
            'job' => 'Freelancer',
        ]);
        DB::table('testimonials')->insert([
            'delay' => '400',
            'comment' => 'Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
            enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
            nisi cillum quid.',
            'image' => 'img/testimonials/testimonials-5.jpg',
            'commenter' => 'John Larson',
            'job' => 'Entrepreneur',
        ]);
    }
}
