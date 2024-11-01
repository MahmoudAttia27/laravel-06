<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
use Illuminate\Support\Facades\Hash;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::factory()->create([
            'name' => 'John Doe',
            'yop' => '2033',

        ]);

        Author::factory()->create([
            'name' => 'Ahmed El-Sayed',
            'yop' => '2020',
            'data' => 'Data for Ahmed El-Sayed.',
        ]);

        Author::factory()->create([
            'name' => 'Fatma Mohamed',
            'yop' => '2021',
            'data' => 'Data for Fatma Mohamed.',
        ]);

        Author::factory()->create([
            'name' => 'Mohamed Ali',
            'yop' => '2022',
            'data' => 'Data for Mohamed Ali.',
        ]);

        Author::factory()->create([
            'name' => 'Sara Ahmed',
            'yop' => '2023',
            'data' => 'Data for Sara Ahmed.',
        ]);

        Author::factory()->create([
            'name' => 'Omar Hassan',
            'yop' => '2022',
            'data' => 'Data for Omar Hassan.',
        ]);

        Author::factory()->create([
            'name' => 'Leila Youssef',
            'yop' => '2021',
            'data' => 'Data for Leila Youssef.',
        ]);

        Author::factory()->create([
            'name' => 'Ahmed Kamel',
            'yop' => '2020',
            'data' => 'Data for Ahmed Kamel.',
        ]);

        Author::factory()->create([
            'name' => 'Dalia Samir',
            'yop' => '2023',
            'data' => 'Data for Dalia Samir.',
        ]);

        Author::factory()->create([
            'name' => 'Nour El-Din',
            'yop' => '2022',
            'data' => 'Data for Nour El-Din.',
        ]);

        Author::factory()->create([
            'name' => 'Yasmin Hossam',
            'yop' => '2021',
            'data' => 'Data for Yasmin Hossam.',
        ]);
    }
}
