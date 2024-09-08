<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        // Generate 10 articles with random titles and content
        foreach (range(1, 50) as $index) {
            Article::create([
                'title' => 'Article Title ' . $index,
                'author' => 'Author ' . $index,
                'year' => 2024,
                'link' => 'https://google.com',
            ]);
        }
    }
}
