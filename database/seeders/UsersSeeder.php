<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Jenssegers\Date\Date;
use Illuminate\Support\Str;

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
            'first_name' => config('theworx.initial-user-first-name'),
            'last_name' => config('theworx.initial-user-last-name'),
            'name' => config('theworx.initial-user-first-name') . ' ' . config('theworx.initial-user-last-name'),
            'username' => config('theworx.initial-user-username'),
            'email' => config('theworx.initial-user-email'),
            'password' => HASH::make(config('theworx.initial-user-password')),
            'email_verified_at' => Date::now(),
            'remember_token' => Str::random(10),
            'created_at' => Date::now(),
            'updated_at' => Date::now(),
        ]);
    }
}
