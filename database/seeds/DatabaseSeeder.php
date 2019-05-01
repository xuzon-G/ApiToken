<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // $this->call('UsersTableSeeder');

       for ($i=0; $i <20 ; $i++) {

       DB::table('authors')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'github'=>Str::random(10),
            'twitter'=>Str::random(10),
            'location'=>Str::random(10),
            'latest_article_published'=>Str::random(10),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),


        ]);
       }

    }
}
