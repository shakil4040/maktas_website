<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Insert admin data using the Admin model
        $admin = Admin::create([
            'name' => 'Super Admin',
            'email' => 'admin@wee.com',
            'is_super' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insert corresponding user data dynamically based on the admin data using the User model
        User::create([
            'username' => Str::slug($admin->name, '_'),
            'email' => $admin->email,
            'password' => Hash::make('password'), // Password hashing
            'user_type_id' => $admin->id, // Using admin's ID as user_type_id
            'user_type' => Admin::class, // Store the full class path for the admin model
            'remember_token' => Str::random(30),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
