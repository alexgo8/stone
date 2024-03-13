<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TombSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('tombs')->insert(
      [
        ['material_id' => '1', 'size' => '80 × 40 × 4', 'price' => '11600', 'size_height' => '80', 'size_width' => '40', 'size_thickness' => '4'],
        ['material_id' => '1', 'size' => '100 × 50 × 4', 'price' => '14800', 'size_height' => '100', 'size_width' => '50', 'size_thickness' => '4'],
        ['material_id' => '1', 'size' => '120 × 60 × 4', 'price' => '23100', 'size_height' => '120', 'size_width' => '60', 'size_thickness' => '4'],
        ['material_id' => '1', 'size' => '140 × 70 × 5', 'price' => '36000', 'size_height' => '140', 'size_width' => '70', 'size_thickness' => '5'],
        ['material_id' => '2', 'size' => '80 × 40 × 4', 'price' => '15200', 'size_height' => '80', 'size_width' => '40', 'size_thickness' => '4'],
        ['material_id' => '2', 'size' => '100 × 50 × 4', 'price' => '19400', 'size_height' => '100', 'size_width' => '50', 'size_thickness' => '4'],
        ['material_id' => '2', 'size' => '120 × 60 × 4', 'price' => '30300', 'size_height' => '120', 'size_width' => '60', 'size_thickness' => '4'],
        ['material_id' => '2', 'size' => '140 × 70 × 5', 'price' => '47200', 'size_height' => '140', 'size_width' => '70', 'size_thickness' => '5'],
        ['material_id' => '3', 'size' => '80 × 40 × 4', 'price' => '5500', 'size_height' => '80', 'size_width' => '40', 'size_thickness' => '4'],
        ['material_id' => '3', 'size' => '80 × 45 × 4', 'price' => '6500', 'size_height' => '80', 'size_width' => '45', 'size_thickness' => '4'],
        ['material_id' => '3', 'size' => '100 × 45 × 4', 'price' => '7100', 'size_height' => '100', 'size_width' => '45', 'size_thickness' => '4'],
        ['material_id' => '3', 'size' => '100 × 50 × 4', 'price' => '8200', 'size_height' => '100', 'size_width' => '50', 'size_thickness' => '4']
      ]
    );
  }
}
