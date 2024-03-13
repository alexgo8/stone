<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlowerGardenSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('flower-gardens')->insert(
      [
        ['material_id' => '1', 'size' => '105 × 60 × 8', 'price' => '11500', 'size_height' => '105', 'size_width' => '60', 'size_thickness' => '8'],
        ['material_id' => '1', 'size' => '125 × 70 × 8', 'price' => '15000', 'size_height' => '125', 'size_width' => '70', 'size_thickness' => '8'],
        ['material_id' => '2', 'size' => '105 × 60 × 8', 'price' => '14500', 'size_height' => '105', 'size_width' => '60', 'size_thickness' => '8'],
        ['material_id' => '2', 'size' => '125 × 70 × 8', 'price' => '18000', 'size_height' => '125', 'size_width' => '70', 'size_thickness' => '8'],
        ['material_id' => '3', 'size' => '105 × 60 × 8', 'price' => '10500', 'size_height' => '105', 'size_width' => '60', 'size_thickness' => '8'],
        ['material_id' => '3', 'size' => '125 × 70 × 8', 'price' => '14000', 'size_height' => '125', 'size_width' => '70', 'size_thickness' => '8'],
      ]
    );
  }
}
