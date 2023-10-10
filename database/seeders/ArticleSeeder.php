<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::factory(100)
            ->state(new Sequence(fn ($sequence) => ['created_at' => now()->addDay($sequence->index)]))
            ->create();
    }
}
