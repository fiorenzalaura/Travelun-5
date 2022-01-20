<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        User::insert([
            [
                'name'=>'Admin',
                'email'=>'Admin_travelun@travel.com',
                'password'=>Hash::make('Admin'),
                'role'=>'Admin'
            ],
            [
                'name'=>'Fiorenza',
                'email'=>'fiorenzala@gmail.com',
                'password'=>Hash::make('fiorenza902'),
                'role'=>'User'
            ]
        ]);
    }
}
