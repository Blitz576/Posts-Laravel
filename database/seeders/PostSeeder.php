<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assuming you have user records in the users table
        $userIds = \App\Models\User::pluck('id')->toArray();

        $posts = [
            [
                'user_id' => $userIds[array_rand($userIds)], // Randomly assign a user_id
                'title' => 'First Post',
                'post' => 'This is the content of the first post.',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(3),
            ],
            [
                'user_id' => $userIds[array_rand($userIds)], // Randomly assign a user_id
                'title' => 'Second Post',
                'post' => 'This is the content of the second post.',
                'created_at' => now()->subHours(12),
                'updated_at' => now()->subHours(6),
            ],
            [
                'user_id' => $userIds[array_rand($userIds)], // Randomly assign a user_id
                'title' => 'Third Post',
                'post' => 'This is the content of the third post.',
                'created_at' => now()->subWeeks(2),
                'updated_at' => now()->subWeek(),
            ],
        ];

        DB::table('posts')->insert($posts);
    }
}
