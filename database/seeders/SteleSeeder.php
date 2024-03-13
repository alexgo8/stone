<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SteleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('steles')->insert(
      [
        ['material_id' => '1', 'size' => '80 × 40 × 8', 'price' => '10000', 'size_height' => '80', 'size_width' => '40', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '100 × 50 × 8', 'price' => '10000', 'size_height' => '100', 'size_width' => '50', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '120 × 60 × 8', 'price' => '10000', 'size_height' => '120', 'size_width' => '60', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '130 × 60 × 8', 'price' => '10000', 'size_height' => '130', 'size_width' => '60', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '140 × 70 × 10', 'price' => '10000', 'size_height' => '140', 'size_width' => '70', 'size_thickness' => '10', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '150 × 70 × 10 ', 'price' => '10000', 'size_height' => '150', 'size_width' => '70', 'size_thickness' => '10', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '160 × 70 × 10', 'price' => '10000', 'size_height' => '160', 'size_width' => '70', 'size_thickness' => '10', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '170 × 70 × 10', 'price' => '10000', 'size_height' => '170', 'size_width' => '70', 'size_thickness' => '10', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '180 × 80 × 12', 'price' => '10000', 'size_height' => '180', 'size_width' => '80', 'size_thickness' => '12', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '2', 'size' => '80 × 40 × 8', 'price' => '10000', 'size_height' => '80', 'size_width' => '40', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '2', 'size' => '100 × 50 × 8', 'price' => '10000', 'size_height' => '100', 'size_width' => '50', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '2', 'size' => '120 × 60 × 8', 'price' => '10000', 'size_height' => '120', 'size_width' => '60', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '2', 'size' => '130 × 60 × 8', 'price' => '10000', 'size_height' => '130', 'size_width' => '60', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '2', 'size' => '140 × 70 × 10', 'price' => '10000', 'size_height' => '140', 'size_width' => '70', 'size_thickness' => '10', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '2', 'size' => '150 × 70 × 10 ', 'price' => '10000', 'size_height' => '150', 'size_width' => '70', 'size_thickness' => '10', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '2', 'size' => '160 × 70 × 10', 'price' => '10000', 'size_height' => '160', 'size_width' => '70', 'size_thickness' => '10', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '2', 'size' => '170 × 70 × 10', 'price' => '10000', 'size_height' => '170', 'size_width' => '70', 'size_thickness' => '10', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '2', 'size' => '180 × 80 × 12', 'price' => '10000', 'size_height' => '180', 'size_width' => '80', 'size_thickness' => '12', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '3', 'size' => '80 × 40 × 8', 'price' => '10000', 'size_height' => '80', 'size_width' => '40', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '3', 'size' => '80 × 45 × 8', 'price' => '10000', 'size_height' => '80', 'size_width' => '45', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '3', 'size' => '100 × 45 × 8', 'price' => '10000', 'size_height' => '100', 'size_width' => '45', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '3', 'size' => '100 × 50 × 8', 'price' => '10000', 'size_height' => '100', 'size_width' => '50', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '3', 'size' => '120 × 50 × 8', 'price' => '10000', 'size_height' => '120', 'size_width' => '50', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '3', 'size' => '120 × 60 × 8', 'price' => '10000', 'size_height' => '120', 'size_width' => '60', 'size_thickness' => '8', 'rotation_id' => '1', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '40 × 80 × 8', 'price' => '10000', 'size_height' => '40', 'size_width' => '80', 'size_thickness' => '8', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '50 × 100 × 8', 'price' => '10000', 'size_height' => '50', 'size_width' => '100', 'size_thickness' => '8', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '60 × 100 × 8', 'price' => '10000', 'size_height' => '60', 'size_width' => '100', 'size_thickness' => '8', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '60 × 120 × 8', 'price' => '10000', 'size_height' => '60', 'size_width' => '120', 'size_thickness' => '8', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '60 × 130 × 8', 'price' => '10000', 'size_height' => '60', 'size_width' => '130', 'size_thickness' => '8', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '70 × 120 × 8', 'price' => '10000', 'size_height' => '70', 'size_width' => '120', 'size_thickness' => '8', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '70 × 130 × 8', 'price' => '10000', 'size_height' => '70', 'size_width' => '130', 'size_thickness' => '8', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '70 × 140 × 10', 'price' => '10000', 'size_height' => '70', 'size_width' => '140', 'size_thickness' => '8', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '70 × 150 × 10', 'price' => '10000', 'size_height' => '70', 'size_width' => '150', 'size_thickness' => '10', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '70 × 160 × 10', 'price' => '10000', 'size_height' => '70', 'size_width' => '160', 'size_thickness' => '10', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '70 × 170 × 10', 'price' => '10000', 'size_height' => '70', 'size_width' => '170', 'size_thickness' => '10', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
        ['material_id' => '1', 'size' => '80 × 180 × 12', 'price' => '10000', 'size_height' => '80', 'size_width' => '180', 'size_thickness' => '12', 'rotation_id' => '2', 'installation_id' => '1', 'portrait_id' => '1', 'name_id' => '1'],
      ]
    );
  }
}
