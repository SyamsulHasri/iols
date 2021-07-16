<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_id' => 'ADMN-000',
            'sponsor_id' => 'Admin',
            'leader_id' => 'Admin',
            'level' => '1',
            'member_type' => 'Admin',
            'name' => 'Syamsul Hasri',
            'email' => 'it@iols.com.my',
            'phone_no' => '0176041406',
            'password' => Hash::make('123456'),
            'register_date' => Carbon::now(),
            'user_status' => 1,
            'activation_date' => Carbon::now(),
            'first_purchase_amount' => '0.00',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            
        ]);

        DB::table('users')->insert([
            'user_id' => 'ADMN-001',
            'sponsor_id' => 'Admin',
            'leader_id' => 'Admin',
            'level' => '1',
            'member_type' => 'Admin',
            'name' => 'iOLS Admin',
            'email' => 'admin@iols.com.my',
            'phone_no' => '0123456789',
            'password' => Hash::make('123456'),
            'register_date' => Carbon::now(),
            'user_status' => 1,
            'activation_date' => Carbon::now(),
            'first_purchase_amount' => '0.00',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            
        ]);
    }
}
