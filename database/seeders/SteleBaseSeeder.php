<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SteleBaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('stele_base')->insert(
      [
        ['stele_id' => 1, 'base_id' => 1],
        ['stele_id' => 1, 'base_id' => 2],
        ['stele_id' => 1, 'base_id' => 3],
      ]);
  }
}
