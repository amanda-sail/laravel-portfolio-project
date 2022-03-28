<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            'nav_name' => 'Home',
            'nav_to' => '#hero',
            'nav_icon' => 'bx bx-home',
        ]);
        DB::table('navbars')->insert([
            'nav_name' => 'About',
            'nav_to' => '#about',
            'nav_icon' => 'bx bx-user',
        ]);
        DB::table('navbars')->insert([
            'nav_name' => 'Skills',
            'nav_to' => '#skills',
            'nav_icon' => 'bx bx-file-blank',
        ]);
        DB::table('navbars')->insert([
            'nav_name' => 'Portfolio',
            'nav_to' => '#portfolio',
            'nav_icon' => 'bx bx-book-content',
        ]);
        DB::table('navbars')->insert([
            'nav_name' => 'Testimonials',
            'nav_to' => '#testimonials',
            'nav_icon' => 'bx bx-server',
        ]);
        DB::table('navbars')->insert([
            'nav_name' => 'Contact',
            'nav_to' => '#contact',
            'nav_icon' => 'bx bx-envelope',
        ]);
    }
}
