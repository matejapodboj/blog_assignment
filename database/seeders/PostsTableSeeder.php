<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $first_user = User::where('email', 'first@email.com')->first();
        $second_user = User::where('email', 'second@email.com')->first();

        Post::insert([
            [
                'user_id' => $first_user->id,
                'title' => 'First user post',
                'content' => 'This is the content of the first post.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => $second_user->id,
                'title' => 'Second user post',
                'content' => 'This is the content of the second post.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
