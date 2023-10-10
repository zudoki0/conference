<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Enums\Status;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = Status::cases();

        for($i = 0; $i < 10; $i++) {
            $randomTimestamp = rand(strtotime('2024-01-01 00:00:00'),strtotime('2024-12-31 23:59:59'));
            $randomStartDate = new \DateTime();
            $randomEndDate = new \DateTime();
            $randomStartDate->setTimestamp($randomTimestamp);
            $randomEndDate->setTimestamp($randomTimestamp + rand(3600,7200));
            \App\Models\Conference::create([
                'title' => 'Conferenece ' . ($i + 1),
                'author' => 'John ' . \Str::random(6),
                'speaker' => 'Peter ' . \Str::random(6),
                'description' => \Str::random(100),
                'address' => '2048 Benedum Drive',
                'location' => 'Auditorium ' . rand(1,10),
                'max_participants' => rand(100,200),
                'status' => $status[array_rand($status)]->value,
                'conference_start_date' => date_format($randomStartDate, 'Y-m-d H:i:s'),
                'conference_end_date' => date_format($randomEndDate, 'Y-m-d H:i:s'),
            ]);
        }
    }
}
