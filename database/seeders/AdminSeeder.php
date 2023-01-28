<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Admin Dianterin',
            'email'=>'admin@gmail.com',
            'role'=>1,
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('admin001'),
            'no_hp' => '085624458978',
            'created_at' => Carbon::now(),
        ]);
    }
}
