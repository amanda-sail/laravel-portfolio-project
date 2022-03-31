<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facts')->insert([
            'fact_delay' => '0',
            'fact_icon' => 'bi bi-emoji-smile',
            'fact_number' => '232',
            'fact_title' => 'Happy Clients',
            'fact_desc' => ' consequuntur quae',
        ]);
        DB::table('facts')->insert([
            'fact_delay' => '100',
            'fact_icon' => 'bi bi-journal-richtext',
            'fact_number' => '521',
            'fact_title' => 'Projects',
            'fact_desc' => ' adipisci atque cum quia aut',
        ]);
        DB::table('facts')->insert([
            'fact_delay' => '200',
            'fact_icon' => 'bi bi-headset',
            'fact_number' => '1453',
            'fact_title' => 'Hours Of Support',
            'fact_desc' => ' aut commodi quaerat',
        ]);
        DB::table('facts')->insert([
            'fact_delay' => '300',
            'fact_icon' => 'bi bi-people',
            'fact_number' => '32',
            'fact_title' => 'Hard Workers',
            'fact_desc' => ' rerum asperiores dolor',
        ]);
    }
}
