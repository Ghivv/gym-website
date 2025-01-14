<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => 'Judul Artikel 1',
            'content' => 'Ini adalah konten artikel pertama.',
            'category' => 'Teknologi',
        ]);

        Article::create([
            'title' => 'Judul Artikel 2',
            'content' => 'Ini adalah konten artikel kedua.',
            'category' => 'Hiburan',
        ]);
    }
}
