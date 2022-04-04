<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'skill' => 'HTML',
            'skill_rating' => '100',
        ]);
        DB::table('skills')->insert([
            'skill' => 'CSS',
            'skill_rating' => '90',
        ]);
        DB::table('skills')->insert([
            'skill' => 'JavaScript',
            'skill_rating' => '75',
        ]);
        DB::table('skills')->insert([
            'skill' => 'PHP',
            'skill_rating' => '80',
        ]);
        DB::table('skills')->insert([
            'skill' => 'WordPress/CMS',
            'skill_rating' => '90',
        ]);
        DB::table('skills')->insert([
            'skill' => 'Photoshop',
            'skill_rating' => '55',
        ]);
    }
}
