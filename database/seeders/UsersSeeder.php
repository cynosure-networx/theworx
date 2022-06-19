<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(50)->create()->each(function ($user) {
            $user->assignRole('writer');
        });

        DB::table('users')->insert([
            'first_name' => config('theworx.INITIAL_USER_FIRST_NAME'),
            'last_name' => config('theworx.INITIAL_USER_LAST_NAME'),
            'name' => config('theworx.INITIAL_USER_LAST_NAME').' '.config('theworx.INITIAL_USER_LAST_NAME'),
            'username' => config('theworx.INITIAL_USER_USERNAME'),
            'email' => config('theworx.INITIAL_USER_EMAIL'),
            'password' => HASH::make(config('theworx.INITIAL_USER_PASSWORD')),
          ]);
    }
}
