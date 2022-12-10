<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class YoutubeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('youtube')->insert([
            'Title' => 'Bedford Falls - Vidal Loco [Music Video]',
            'Views' => 1505608,
            'Link' => 'https://www.youtube.com/watch?v=bo87VIvhLAg'
        ]);

        DB::table('youtube')->insert([
            'Title' => 'What you didnt know about YouTube.',
            'Views' => 307345  ,
            'Link' => 'https://www.youtube.com/watch?v=WKOkCpMZ3Z0'
        ]);

        DB::table('youtube')->insert([
            'Title' => 'Tamada - Piramde (Official Music Video)',
            'Views' => 2684138,
            'Link' => 'youtube.com/watch?v=l7bjfR9muNs'
        ]);

        DB::table('youtube')->insert([
            'Title' => 'Front-end dev reacts to incredible CSS-only art',
            'Views' => 3272,
            'Link' => 'https://www.youtube.com/watch?v=sI9p5EswxdQ'
        ]);

        DB::table('youtube')->insert([
            'Title' => 'Egg Drop From Space',
            'Views' => 25972825,
            'Link' => 'https://www.youtube.com/watch?v=BYVZh5kqaFg'
        ]);


    }
}
