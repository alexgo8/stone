<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call([
      MaterialSeeder::class,
      InstallationSeeder::class,
      TombSeeder::class,
      FlowerGardenSeeder::class,
      NameEngravingSeeder::class,
      PortraitEngravingSeeder::class,
      EngravingMethodSeeder::class,
      SteleSeeder::class,
      RotationSeeder::class,
      BaseSeeder::class,
      SteleBaseSeeder::class
    ]);


    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
