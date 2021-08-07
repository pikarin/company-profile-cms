<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => config('admin.name'),
            'email' => config('admin.email'),
            'password' => bcrypt(config('admin.password')),
            'email_verified_at' => now(),
        ]);
    }
}
