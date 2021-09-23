<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 50; $i++){

            // $postDetail = new PostDetail();
            // $postDetail -> type = $faker->words(1,true);
            // $postDetail -> author_name = $faker->words(1,true);
            // $postDetail -> save();
            



            $post = new Post();
            $post -> author = $faker -> words(2,true);
            $post -> content = $faker -> paragraph(5);
            $post -> img_path = $faker -> imageUrl(600,400, 'post', true);

            // $post->Post_detail_id = $postDetail -> id;


            $post -> save();
        }
    }
}
