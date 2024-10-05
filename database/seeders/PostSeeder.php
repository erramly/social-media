<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        // استخدام factory لإنشاء 10 منشورات
        Post::factory()->count(10)->create();
    }
}
