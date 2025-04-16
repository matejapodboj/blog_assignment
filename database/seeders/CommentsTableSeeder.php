<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first_user = User::where('email', 'first@email.com')->first();

        $post = Post::find(1);

        Comment::insert([
            [
                'post_id' => $post->id,
                'user_id' => $first_user->id,
                'comment' => 'First user comment',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'post_id' => $post->id,
                'user_id' => null,
                'comment' => 'Guests comment',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

    }
}
