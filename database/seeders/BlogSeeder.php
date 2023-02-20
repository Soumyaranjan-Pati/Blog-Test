<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=1; $i<=10; $i++){
            DB::table('blogs')->insert([
                'title'=>Str::random(10),
                'content'=>Str::random(80),
                'user_id'=>1,
            ]);
        }
        // for($i=1; $i<=3; $i++){
        //     DB::table('blogs')->insert([
        //         'title'=>Str::random(10),
        //         'content'=>Str::random(100),
        //         'user_id'=>2,
        //     ]);
        // }
                // for($i=1; $i<=3; $i++){
        //     DB::table('blogs')->insert([
        //         'title'=>Str::random(10),
        //         'content'=>Str::random(100),
        //         'user_id'=>3,
        //     ]);
        // }

    }
}
