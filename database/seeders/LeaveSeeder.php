<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Leave;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Leave::create([
            'user_id' => 1,
            'leave_type_id' => 1,
            'start_date' => '2024-08-01',
            'end_date' => '2024-08-03',
            'is_half_day' => 0,
            'total_days' => 3,
            'is_paid' => 1,
            'reason' => 'Sick',
            'status' => 'pending',
            'company_id' => 1,
            'created_by'=>1
        ]);
    }
}
