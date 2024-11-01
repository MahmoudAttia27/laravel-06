<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\Hash;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::factory()->create([
            'title' => 'Exploring AI',
            'author_id' => 1,
            'language_id' => 1,
            'topic_id' => 1,
        ]);

        Book::factory()->create([
            'title' => 'Understanding Climate Change',
            'author_id' => 2,
            'language_id' => 2,
            'topic_id' => 2,
        ]);

        Book::factory()->create([
            'title' => 'Renewable Energy Sources',
            'author_id' => 3,
            'language_id' => 3,
            'topic_id' => 3,
        ]);

        Book::factory()->create([
            'title' => 'The Future of Work',
            'author_id' => 1,
            'language_id' => 1,
            'topic_id' => 1,
        ]);

        Book::factory()->create([
            'title' => 'AI in Healthcare',
            'author_id' => 2,
            'language_id' => 2,
            'topic_id' => 2,
        ]);

        Book::factory()->create([
            'title' => 'Urbanization and its Impact',
            'author_id' => 3,
            'language_id' => 3,
            'topic_id' => 3,
        ]);

        Book::factory()->create([
            'title' => 'The Ethics of AI',
            'author_id' => 1,
            'language_id' => 1,
            'topic_id' => 1,
        ]);

        Book::factory()->create([
            'title' => 'Environmental Policy',
            'author_id' => 2,
            'language_id' => 2,
            'topic_id' => 2,
        ]);

        Book::factory()->create([
            'title' => 'Future of Renewable Energy',
            'author_id' => 3,
            'language_id' => 3,
            'topic_id' => 3,
        ]);

        Book::factory()->create([
            'title' => 'Social Media in Education',
            'author_id' => 1,
            'language_id' => 1,
            'topic_id' => 1,
        ]);
    }
}
