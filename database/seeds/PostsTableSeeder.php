<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title' => 'tips cepat meniikahh', 'content' => 'lorem ipsum'],
            ['title' => 'harus menunda nikah', 'content' => 'lorem ipsum'],
            ['title' => 'membangun visi misi keluarga', 'content' => 'lorem ipsum']
        ];

        DB::table('posts')->insert($posts);
    }
}
