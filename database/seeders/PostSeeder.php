<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_post = config("post");
    
        foreach ($array_post as $post_item) {
            $nuovo_post = new Post();
            $nuovo_post->title = $post_item['title'];
            $nuovo_post->description = $post_item['description'];
            $nuovo_post->image = $post_item['image'];
            $nuovo_post->save();
        }
    }
}
