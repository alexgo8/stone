<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstallationSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('installations')->insert(
      [
        ['material_id' => '1', 'size' => '80 × 40', 'price' => '3500', 'size_height' => '80', 'size_width' => '40'], ['material_id' => '1', 'size' => '100 × 50', 'price' =>'4500', 'size_height' => '100', 'size_width' => '50'], ['material_id' => '1', 'size' => '100 × 60', 'price' =>'4500', 'size_height' => '100', 'size_width' => '60'], ['material_id' => '1', 'size' => '120 × 60', 'price' =>'5500', 'size_height' => '120', 'size_width' => '60'], ['material_id' => '1', 'size' => '120 × 70', 'price' =>'5500', 'size_height' => '120', 'size_width' => '70'], ['material_id' => '1', 'size' => '130 × 60', 'price' =>'7000', 'size_height' => '130', 'size_width' => '60'], ['material_id' => '1', 'size' => '130 × 70', 'price' =>'7000', 'size_height' => '130', 'size_width' => '70'], ['material_id' => '2', 'size' => '80 × 40', 'price' =>'3500', 'size_height' => '80', 'size_width' => '40'], ['material_id' => '2', 'size' => '100 × 50', 'price' =>'4500', 'size_height' => '100', 'size_width' => '50'], ['material_id' => '2', 'size' => '100 × 60', 'price' =>'4500', 'size_height' => '100', 'size_width' => '60'], ['material_id' => '2', 'size' => '120 × 60', 'price' =>'5500', 'size_height' => '120', 'size_width' => '60'], ['material_id' => '2', 'size' => '120 × 70', 'price' =>'5500', 'size_height' => '120', 'size_width' => '70'], ['material_id' => '2', 'size' => '130 × 60', 'price' =>'7000', 'size_height' => '130', 'size_width' => '60'], ['material_id' => '2', 'size' => '130 × 70', 'price' =>'7000', 'size_height' => '130', 'size_width' => '70'], ['material_id' => '3', 'size' => '80 × 45', 'price' =>'3000', 'size_height' => '80', 'size_width' => '45'], ['material_id' => '3', 'size' => '100 × 45', 'price' =>'3500', 'size_height' => '100', 'size_width' => '45'], ['material_id' => '3', 'size' => '120 × 50', 'price' =>'4500', 'size_height' => '120', 'size_width' => '50']
      ]);    
  }
}
