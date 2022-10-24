<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Comment extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'id' => 1,
                'name'=> "hide",
                'comment'=>"Tagawatt",
                'post_id'=>1,
            ],
            [
                'id' => 2,
                'name'=> "hide2",
                'comment'=>"Tagawatt2",
                'post_id'=>2,
            ],
            [
                'id' => 3,
                'name'=> "hide3",
                'comment'=>"Tagawatt3",
                'post_id'=>3,
            ],
        ]);
    }
}