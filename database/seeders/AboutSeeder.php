<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'text_1' => 'My name is Georges Nodari, I am a web developer with a great passion for the IT world. I am passionate about what the world of IT development can build and at the same time that is what pushes me to the challenge. I constantly seek to improve my skills as a Front-End and Back-End developer',

            'text_2' => 'I develop websites and applications in HTML, CSS, JavaScript and php. I am familiar with the development of layouts that provide me. I always get better with every project I I have in my hands.',

            'text_3' => 'I am a dedicated person chasing dreams, hardworking and results oriented, I am looking for always reaching for my best version.',

            'image' => 'undraw_add_information.svg'
        ]);
    }
}
