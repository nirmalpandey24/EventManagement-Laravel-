<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        Event::create([
            'title' => 'Tech Conference 2024',
            'description' => 'A conference about the latest in tech.',
            'date' => '2024-11-15',
            'location' => 'Kathmandu',
            'category_id' => 1,
        ]);

        Event::create([
            'title' => 'Web Development Workshop',
            'description' => 'Hands-on workshop on modern web development techniques.',
            'date' => '2024-12-01',
            'location' => 'Lalitpur',
            'category_id' => 2,
        ]);

        Event::create([
            'title' => 'Business Seminar',
            'description' => 'Seminar on the future of business and entrepreneurship.',
            'date' => '2024-12-10',
            'location' => 'Bhaktapur',
            'category_id' => 3,
        ]);
    }
}
