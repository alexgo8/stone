<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NameEngravingSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('name-engravings')->insert(
      [
        ['material_id' => '1', 'size' => '80 × 40', 'price' => '1500', 'size_height' => '80', 'size_width' => '40'],
        ['material_id' => '1', 'size' => '100 × 50', 'price' => '1800', 'size_height' => '100', 'size_width' => '50'],
        ['material_id' => '1', 'size' => '120 × 60', 'price' => '2000', 'size_height' => '120', 'size_width' => '60'],
        ['material_id' => '1', 'size' => '130 × 60', 'price' => '2300', 'size_height' => '130', 'size_width' => '60'],
        ['material_id' => '1', 'size' => '140 × 70', 'price' => '2300', 'size_height' => '140', 'size_width' => '70'],
        ['material_id' => '1', 'size' => '150 × 70', 'price' => '3000', 'size_height' => '150', 'size_width' => '70'],
        ['material_id' => '1', 'size' => '160 × 70', 'price' => '3500', 'size_height' => '160', 'size_width' => '70'],
        ['material_id' => '1', 'size' => '170 × 70', 'price' => '3500', 'size_height' => '170', 'size_width' => '70'],
        ['material_id' => '1', 'size' => '180 × 80', 'price' => '4000', 'size_height' => '180', 'size_width' => '80'],
        ['material_id' => '2', 'size' => '80 × 40', 'price' => '1300', 'size_height' => '80', 'size_width' => '40'],
        ['material_id' => '2', 'size' => '100 × 50', 'price' => '1500', 'size_height' => '100', 'size_width' => '50'],
        ['material_id' => '2', 'size' => '120 × 60', 'price' => '1500', 'size_height' => '120', 'size_width' => '60'],
        ['material_id' => '2', 'size' => '130 × 60', 'price' => '2000', 'size_height' => '130', 'size_width' => '60'],
        ['material_id' => '2', 'size' => '140 × 70', 'price' => '2000', 'size_height' => '140', 'size_width' => '70'],
        ['material_id' => '2', 'size' => '150 × 70', 'price' => '2500', 'size_height' => '150', 'size_width' => '70'],
        ['material_id' => '2', 'size' => '160 × 70', 'price' => '3000', 'size_height' => '160', 'size_width' => '70'],
        ['material_id' => '2', 'size' => '170 × 70', 'price' => '3000', 'size_height' => '170', 'size_width' => '70'],
        ['material_id' => '2', 'size' => '180 × 80', 'price' => '3500', 'size_height' => '180', 'size_width' => '80'],
        ['material_id' => '3', 'size' => '80 × 40', 'price' => '1150', 'size_height' => '80', 'size_width' => '40'],
        ['material_id' => '3', 'size' => '80 × 45', 'price' => '1150', 'size_height' => '80', 'size_width' => '45'],
        ['material_id' => '3', 'size' => '100 × 45', 'price' => '1300', 'size_height' => '100', 'size_width' => '45'],
        ['material_id' => '3', 'size' => '100 × 50', 'price' => '1300', 'size_height' => '100', 'size_width' => '50'],
        ['material_id' => '3', 'size' => '120 × 50', 'price' => '1500', 'size_height' => '120', 'size_width' => '50'],
        ['material_id' => '3', 'size' => '120 × 60', 'price' => '1500', 'size_height' => '120', 'size_width' => '60'],
      ]
    );
  }
}
