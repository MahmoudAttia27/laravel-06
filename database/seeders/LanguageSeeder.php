<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Language;
use Illuminate\Support\Facades\Hash;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::factory()->create([
            'lang' => 'English',
        ]);

        Language::factory()->create([
            'lang' => 'Arabic',
        ]);

        Language::factory()->create([
            'lang' => 'French',
        ]);

        Language::factory()->create([
            'lang' => 'Spanish',
        ]);

        Language::factory()->create([
            'lang' => 'German',
        ]);

        Language::factory()->create([
            'lang' => 'Italian',
        ]);

        Language::factory()->create([
            'lang' => 'Chinese',
        ]);

        Language::factory()->create([
            'lang' => 'Japanese',
        ]);

        Language::factory()->create([
            'lang' => 'Russian',
        ]);

        Language::factory()->create([
            'lang' => 'Portuguese',
        ]);
    }
}
