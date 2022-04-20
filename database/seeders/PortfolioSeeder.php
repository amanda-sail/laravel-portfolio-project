<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'filter' => 'app',
            'image' => 'img/portfolio/portfolio-1.jpg',
            'title' => 'App 1',
        ]);
        DB::table('portfolios')->insert([
            'filter' => 'web',
            'image' => 'img/portfolio/portfolio-2.jpg',
            'title' => 'Web 3',
        ]);
        DB::table('portfolios')->insert([
            'filter' => 'app',
            'image' => 'img/portfolio/portfolio-3.jpg',
            'title' => 'App 2',
        ]);
        DB::table('portfolios')->insert([
            'filter' => 'card',
            'image' => 'img/portfolio/portfolio-4.jpg',
            'title' => 'Card 2',
        ]);
        DB::table('portfolios')->insert([
            'filter' => 'web',
            'image' => 'img/portfolio/portfolio-5.jpg',
            'title' => 'Web 2',
        ]);
        DB::table('portfolios')->insert([
            'filter' => 'app',
            'image' => 'img/portfolio/portfolio-6.jpg',
            'title' => 'App 3',
        ]);
        DB::table('portfolios')->insert([
            'filter' => 'card',
            'image' => 'img/portfolio/portfolio-7.jpg',
            'title' => 'Card 1',
        ]);
        DB::table('portfolios')->insert([
            'filter' => 'card',
            'image' => 'img/portfolio/portfolio-8.jpg',
            'title' => 'Card 3',
        ]);
        DB::table('portfolios')->insert([
            'filter' => 'web',
            'image' => 'img/portfolio/portfolio-9.jpg',
            'title' => 'Web 3',
        ]);
    }
}
