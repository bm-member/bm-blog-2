<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=50; $i++) {
            $post = new App\Post();
            $post->title = str_random(10);
            $post->content = str_random(200);
            $post->user_id = 1;
            $post->save();
        }
    }
}
