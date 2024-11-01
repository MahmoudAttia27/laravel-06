<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topic;
use Illuminate\Support\Facades\Hash;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Topic::factory()->create([
            'name' => 'Ahmed El-Sayed',
            'topic' => 'The impact of technology on society',
        ]);

        Topic::factory()->create([
            'name' => 'Fatma Mohamed',
            'topic' => 'Climate change and its effects',
        ]);

        Topic::factory()->create([
            'name' => 'Mohamed Ali',
            'topic' => 'The future of renewable energy',
        ]);

        Topic::factory()->create([
            'name' => 'Sara Ahmed',
            'topic' => 'Mental health awareness',
        ]);

        Topic::factory()->create([
            'name' => 'Omar Hassan',
            'topic' => 'Innovations in AI',
        ]);

        Topic::factory()->create([
            'name' => 'Leila Youssef',
            'topic' => 'The importance of education',
        ]);

        Topic::factory()->create([
            'name' => 'Ahmed Kamel',
            'topic' => 'The role of art in culture',
        ]);

        Topic::factory()->create([
            'name' => 'Dalia Samir',
            'topic' => 'Nutrition and health',
        ]);

        Topic::factory()->create([
            'name' => 'Nour El-Din',
            'topic' => 'Exploring space: the next frontier',
        ]);

        Topic::factory()->create([
            'name' => 'Yasmin Hossam',
            'topic' => 'The effects of social media',
        ]);
    }
}
