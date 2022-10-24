<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'name' => 'hide',
                'contents' => 'あああああああああああああああ',
                'post_id' => 1,
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'name' => 'hide2',
                'contents' => 'あああああああああああああああ',
                'post_id' => 2,
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'name' => 'hide32127182638',
                'contents' => 'あああああああああああああああ',
                'post_id' => 3,
            ],
        ]);
    }
}
