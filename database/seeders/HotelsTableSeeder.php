<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            [
                'name' => 'Hotel A',
                'address' => '123 Main St',
                'phone' => '123-456-7890',
                'email' => 'contact@hotela.com',
                'stars' => 5,
                'check_in_time' => Carbon::parse('2024-06-01 14:00:00'),
                'check_out_time' => Carbon::parse('2024-06-02 12:00:00'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel B',
                'address' => '456 Side St',
                'phone' => '987-654-3210',
                'email' => 'contact@hotelb.com',
                'stars' => 4,
                'check_in_time' => Carbon::parse('2024-06-01 15:00:00'),
                'check_out_time' => Carbon::parse('2024-06-02 11:00:00'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hotel C',
                'address' => '789 Another St',
                'phone' => '555-555-5555',
                'email' => 'contact@hotelc.com',
                'stars' => 3,
                'check_in_time' => Carbon::parse('2024-06-01 16:00:00'),
                'check_out_time' => Carbon::parse('2024-06-02 10:00:00'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
