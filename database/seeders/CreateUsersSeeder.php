<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'first_name'=>'Admin',
                'last_name'=>'lastname',
                'email'=>'admin@admin.com',
                'is_admin'=>'1',
                'is_active' => 1,
                'password'=> \Hash::make(1234),
            ],
            [
                'first_name'=>'User',
                'last_name'=>'lastname',
                'email'=>'user@user.com',
                'is_admin'=>'0',
                'is_active' => 1,
                'password'=> \Hash::make(1234),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
