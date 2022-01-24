<?php

namespace Database\Seeders;

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
            [
                'logo' => 'laravel-icon.svg',
                'title' => 'Laravel',
                'description' => 'Proin ornare non purus ut rutrum. Nulla facilisi. Aliquam laoreet libero ac pharetra feugiat. Cras ac fermentum nunc, a faucibus nunc.'
            ],
            [
                'logo' => 'react-icon.svg',
                'title' => 'ReactJS',
                'description' => 'Proin ornare non purus ut rutrum. Nulla facilisi. Aliquam laoreet libero ac pharetra feugiat. Cras ac fermentum nunc, a faucibus nunc.'
            ],
            [
                'logo' => 'php-icon.svg',
                'title' => 'php',
                'description' => 'Proin ornare non purus ut rutrum. Nulla facilisi. Aliquam laoreet libero ac pharetra feugiat. Cras ac fermentum nunc, a faucibus nunc.'
            ],
            [
                'logo' => 'js-icon.svg',
                'title' => 'Js',
                'description' => 'Proin ornare non purus ut rutrum. Nulla facilisi. Aliquam laoreet libero ac pharetra feugiat. Cras ac fermentum nunc, a faucibus nunc.'
            ],
            [
                'logo' => 'sass-icon.svg',
                'title' => 'Sass',
                'description' => 'Proin ornare non purus ut rutrum. Nulla facilisi. Aliquam laoreet libero ac pharetra feugiat. Cras ac fermentum nunc, a faucibus nunc.'
            ],
            [
                'logo' => 'bootstrap-icon.svg',
                'title' => 'Bootstrap',
                'description' => 'Proin ornare non purus ut rutrum. Nulla facilisi. Aliquam laoreet libero ac pharetra feugiat. Cras ac fermentum nunc, a faucibus nunc.'
            ],
            [
                'logo' => 'tailwind-css-icon.svg',
                'title' => 'Tailwind-css',
                'description' => 'Proin ornare non purus ut rutrum. Nulla facilisi. Aliquam laoreet libero ac pharetra feugiat. Cras ac fermentum nunc, a faucibus nunc.'
            ],
            [
                'logo' => 'docker-icon.svg',
                'title' => 'Docker',
                'description' => 'Proin ornare non purus ut rutrum. Nulla facilisi. Aliquam laoreet libero ac pharetra feugiat. Cras ac fermentum nunc, a faucibus nunc.'
            ],



        ]);
    }
}
