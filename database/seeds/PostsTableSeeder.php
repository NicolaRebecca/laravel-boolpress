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
            $post = new Post();
            $post -> author = $faker -> words(2,true);
            $post -> content = $faker -> paragraph(5);
            $post -> img_path = $faker -> imageUrl(600,400, 'post', true);
            $post -> save();
        }
    }
}
