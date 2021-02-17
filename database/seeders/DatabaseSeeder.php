<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Vica Pebriyanti Jatnika",
            "email" => "vicaafy08@gmail.com",
            "username" => "vicaa.f",
            "role" => "administrator",
            "password" => Hash::make('admin')
        ]);
    }
}
