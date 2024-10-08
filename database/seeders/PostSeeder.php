<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::factory()->count(10)->create();
        User::factory()->count(10)->create();
    }
}
