<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AttendeeSeeder extends Seeder
{
    public function run(): void
    {
        $attendees = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'event_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'event_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'event_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($attendees as $attendee) {
            DB::table('attendees')->updateOrInsert(
                ['email' => $attendee['email']], // Check for existing email
                $attendee // Insert or update with this data
            );
        }
    }
}
