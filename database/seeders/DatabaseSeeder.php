<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            HeaderSeeder::class,
            NavbarSeeder::class,
            SocialMediaSeeder::class,
            HeroSeeder::class,
            AboutSeeder::class,
            FactSeeder::class, 
            SkillSeeder::class,
            PortfolioSeeder::class,
            TestimonialSeeder::class,
            ContactSeeder::class,
            FooterSeeder::class,
        ]);
    }
}
