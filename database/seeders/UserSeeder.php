<?php


namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $users = [
            ['email' => 'admin@admin.io', 'password' => Hash::make('1234'), 'role' => 'admin'],
            ['email' => 'manager@manager.io', 'password' => Hash::make('1234'), 'role' => 'manager'],
            ['email' => 'user@user.io', 'password' => Hash::make('1234'), 'role' => 'user'],
        ];

        User::truncate();
        foreach ($users as $user) {
            User::create($user);
        }
    }
}