<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'level' => 'Admin',
            'member_type' => 'Admin',
            'name' => 'Syamsul Hasri',
            'email' => 'it@iols.com.my',
            'phone_no' => '0176041406',
            'password' => Hash::make('123456'),
            'first_purchase' => 1,
            'first_purchase_amount' => '0.00',
            'user_status' => 1,
        ]);

        DB::table('users')->insert([
            'user_id' => 'ADMN-001',
            'sponsor_id' => 'Admin',
            'leader_id' => 'Admin',
            'level' => 'Admin',
            'member_type' => 'Admin',
            'name' => 'iOLS Admin',
            'email' => 'admin@iols.com.my',
            'phone_no' => '0123456789',
            'password' => Hash::make('123456'),
            'first_purchase' => 1,
            'first_purchase_amount' => '0.00',
            'user_status' => 1,
        ]);
    }
}
