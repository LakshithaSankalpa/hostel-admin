<?php

namespace Database\Seeders;

use App\Models\Admins\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'Mr/Mrs Warden',
            'email' => 'warden@hostalsystem.local',
            'password' => Hash::make('1qaz2wsx'),
        ]);
    }
}
