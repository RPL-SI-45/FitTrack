<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    \App\Models\User::factory()->create([
      "name" => "User",
      "email" => "user@user.com",
      "password" => Hash::make("user"),
    ]);
    \App\Models\User::factory()->create([
      "name" => "Admin",
      "email" => "admin@admin.com",
      "password" => Hash::make("admin"),
      "role" => "admin",
    ]);

    \App\Models\User::factory(30)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
