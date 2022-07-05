<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = new User();
        $superAdmin->email = "super-admin@gmail.com";
        $superAdmin->name = "Super Admin";
        $superAdmin->role = "ADMIN";
        $superAdmin->password = Hash::make("supersecret");
        $superAdmin->save();
    }
}
