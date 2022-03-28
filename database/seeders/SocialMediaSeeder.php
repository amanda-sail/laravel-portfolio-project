<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_media')->insert([
            'media_class' => 'twitter',
            'media_link' => '#',
            'media_icon' => 'bx bxl-twitter',
        ]);
        DB::table('social_media')->insert([
            'media_class' => 'facebook',
            'media_link' => '#',
            'media_icon' => 'bx bxl-facebook',
        ]);
        DB::table('social_media')->insert([
            'media_class' => 'instagram',
            'media_link' => '#',
            'media_icon' => 'bx bxl-instagram',
        ]);
        DB::table('social_media')->insert([
            'media_class' => 'google-plus',
            'media_link' => '#',
            'media_icon' => 'bx bxl-skype',
        ]);
        DB::table('social_media')->insert([
            'media_class' => 'linkedin',
            'media_link' => '#',
            'media_icon' => 'bx bxl-linkedin',
        ]);
    }
}
