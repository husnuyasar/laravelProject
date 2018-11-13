<?php

use Illuminate\Database\Seeder;
use App\Entities\User;
use Illuminate\Support\Facades\Hash;
use App\Helpers\EntityHelpers\UserTypeHelper;

class UserSeeder extends Seeder
{
    /**
     * Seed the users table
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@iccdenetim.com',
            'password' => Hash::make('123456'),
            'username' => 'admin'
        ]);
    }
}
