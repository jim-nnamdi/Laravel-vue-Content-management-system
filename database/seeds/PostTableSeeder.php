<?php

use Illuminate\Database\Seeder;
use  App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post;
        $post->user_id = 1;
        $post->title ="Battling with laravel push Notifications";
        $post->body = "Sincerely speaking setting push notifications is one of a kind";
        $post->save();

        $post = new Post;
        $post->user_id = 1;
        $post->title = "Roles setting up in laravel";
        $post->body = "Roles  setting up in laravel can be simple and sometimes tasking";
        $post->save();
    }
}
