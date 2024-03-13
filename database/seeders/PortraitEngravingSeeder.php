<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortraitEngravingSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('portrait-engravings')->insert(
      [
        ['material_id' => '1', 'method_id' => '1', 'size' => '80 × 40', 'price' => '4000', 'size_height' => '80', 'size_width' => '40'],
        ['material_id' => '1', 'method_id' => '1', 'size' => '100 × 50', 'price' => '4500', 'size_height' => '100', 'size_width' => '50'],
        ['material_id' => '1', 'method_id' => '1', 'size' => '120 × 60', 'price' => '6000', 'size_height' => '120', 'size_width' => '60'],
        ['material_id' => '1', 'method_id' => '1', 'size' => '130 × 60', 'price' => '7000', 'size_height' => '130', 'size_width' => '60'],
        ['material_id' => '1', 'method_id' => '1', 'size' => '140 × 70', 'price' => '8500', 'size_height' => '140', 'size_width' => '70'],
        ['material_id' => '1', 'method_id' => '1', 'size' => '150 × 70', 'price' => '9500', 'size_height' => '150', 'size_width' => '70'],
        ['material_id' => '1', 'method_id' => '1', 'size' => '160 × 70', 'price' => '10500', 'size_height' => '160', 'size_width' => '70'],
        ['material_id' => '1', 'method_id' => '1', 'size' => '170 × 70', 'price' => '11500', 'size_height' => '170', 'size_width' => '70'],
        ['material_id' => '1', 'method_id' => '1', 'size' => '180 × 80', 'price' => '13500', 'size_height' => '180', 'size_width' => '80'],
        ['material_id' => '2', 'method_id' => '2', 'size' => '15 × 20', 'price' => '5300', 'size_height' => '15', 'size_width' => '20'],
        ['material_id' => '2', 'method_id' => '2', 'size' => '20 × 30', 'price' => '6000', 'size_height' => '20', 'size_width' => '30'],
        ['material_id' => '2', 'method_id' => '2', 'size' => '25 × 30', 'price' => '6800', 'size_height' => '25', 'size_width' => '30'],
        ['material_id' => '2', 'method_id' => '2', 'size' => '30 × 40', 'price' => '7500', 'size_height' => '30', 'size_width' => '40'],
        ['material_id' => '2', 'method_id' => '2', 'size' => '40 × 60', 'price' => '11300', 'size_height' => '40', 'size_width' => '60'],
        ['material_id' => '2', 'method_id' => '2', 'size' => '50 × 70', 'price' => '18000', 'size_height' => '50', 'size_width' => '70'],
        ['material_id' => '3', 'method_id' => '2', 'size' => '15 × 20', 'price' => '3000', 'size_height' => '15', 'size_width' => '20'],
        ['material_id' => '3', 'method_id' => '2', 'size' => '20 × 30', 'price' => '3800', 'size_height' => '20', 'size_width' => '30'],
        ['material_id' => '3', 'method_id' => '2', 'size' => '25 × 30', 'price' => '4100', 'size_height' => '25', 'size_width' => '30'],
        ['material_id' => '3', 'method_id' => '2', 'size' => '30 × 40', 'price' => '4500', 'size_height' => '30', 'size_width' => '40'],
      ]
    );
  }
}
