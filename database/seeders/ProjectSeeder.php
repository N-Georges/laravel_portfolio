<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'image' => 'cryptoreact.png',
                'title' => 'API Crypto in ReactJs',
            ],
            [
                'image' => 'portfolioreact.png',
                'title' => 'Portfolio in ReactJs',
            ],
            [
                'image' => 'landingpage.png',
                'title' => 'LandingPage in html/css',
            ],
            [
                'image' => 'chatnextjs.png',
                'title' => 'AppChat in NextJs',
            ],
            [
                'image' => 'weatherreact.png',
                'title' => 'API Weather in ReactJs',
            ],



        ]);
    }
}
