<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BaseSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    DB::table('bases')->insert(
      [
        ['material_id' => '1', 'size' => '15 × 50 × 15', 'price' => '1000', 'size_height' => '15', 'size_width' => '50', 'size_thickness' => '15', 'rotation_id' => '1'],
        ['material_id' => '1', 'size' => '20 × 60 × 15', 'price' => '1000', 'size_height' => '20', 'size_width' => '60', 'size_thickness' =>'15', 'rotation_id' => '1'],
        ['material_id' => '1', 'size' => '20 × 70 × 15', 'price' => '1000', 'size_height' => '20', 'size_width' => '70', 'size_thickness' =>'15', 'rotation_id' => '1'],
        ['material_id' => '1', 'size' => '20 × 80 × 20', 'price' => '1000', 'size_height' => '20', 'size_width' => '80', 'size_thickness' =>'20', 'rotation_id' => '1'],
        ['material_id' => '1', 'size' => '25 × 80 × 20', 'price' => '1000', 'size_height' => '25', 'size_width' => '80', 'size_thickness' =>'20', 'rotation_id' => '1'],
        ['material_id' => '1', 'size' => '30 × 90 × 25', 'price' => '1000', 'size_height' => '30', 'size_width' => '90', 'size_thickness' =>'25', 'rotation_id' => '1'],
        ['material_id' => '2', 'size' => '15 × 50 × 15', 'price' => '1000', 'size_height' => '15', 'size_width' => '50', 'size_thickness' => '15', 'rotation_id' => '1'],
        ['material_id' => '2', 'size' => '20 × 60 × 15', 'price' => '1000', 'size_height' => '20', 'size_width' => '60', 'size_thickness' => '15', 'rotation_id' => '1'],
        ['material_id' => '2', 'size' => '20 × 70 × 15', 'price' => '1000', 'size_height' => '20', 'size_width' => '70', 'size_thickness' => '15', 'rotation_id' => '1'],
        ['material_id' => '2', 'size' => '20 × 80 × 20', 'price' => '1000', 'size_height' => '20', 'size_width' => '80', 'size_thickness' => '20', 'rotation_id' => '1'],
        ['material_id' => '2', 'size' => '25 × 80 × 20', 'price' => '1000', 'size_height' => '25', 'size_width' => '80', 'size_thickness' => '20', 'rotation_id' => '1'],
        ['material_id' => '2', 'size' => '30 × 90 × 25', 'price' => '1000', 'size_height' => '30', 'size_width' => '90', 'size_thickness' => '25', 'rotation_id' => '1'],
        ['material_id' => '3', 'size' => '15 × 55 × 15', 'price' => '1000', 'size_height' => '15', 'size_width' => '55', 'size_thickness' => '15', 'rotation_id' => '1'],
        ['material_id' => '3', 'size' => '15 × 60 × 20', 'price' => '1000', 'size_height' => '15', 'size_width' => '60', 'size_thickness' => '20', 'rotation_id' => '1'],
        ['material_id' => '3', 'size' => '20 × 60 × 15', 'price' => '1000', 'size_height' => '20', 'size_width' => '60', 'size_thickness' => '15', 'rotation_id' => '1'],
        ['material_id' => '3', 'size' => '20 × 70 × 15', 'price' => '1000', 'size_height' => '20', 'size_width' => '70', 'size_thickness' => '15', 'rotation_id' => '1'],
        ['material_id' => '1', 'size' => '15 × 50 × 12', 'price' => '1000', 'size_height' => '15', 'size_width' => '50', 'size_thickness' => '12', 'rotation_id' => '2'],
        ['material_id' => '1', 'size' => '15 × 60 × 15', 'price' => '1000', 'size_height' => '15', 'size_width' => '60', 'size_thickness' => '15', 'rotation_id' => '2'],
        ['material_id' => '1', 'size' => '20 × 60 × 15', 'price' => '1000', 'size_height' => '20', 'size_width' => '60', 'size_thickness' => '15', 'rotation_id' => '2'],
        ['material_id' => '1', 'size' => '20 × 70 × 15', 'price' => '1000', 'size_height' => '20', 'size_width' => '70', 'size_thickness' => '15', 'rotation_id' => '2'],
        ['material_id' => '1', 'size' => '20 × 70 × 20', 'price' => '1000', 'size_height' => '20', 'size_width' => '70', 'size_thickness' => '20', 'rotation_id' => '2'],
        ['material_id' => '1', 'size' => '20 × 80 × 20', 'price' => '1000', 'size_height' => '20', 'size_width' => '80', 'size_thickness' => '20', 'rotation_id' => '2'],
        ['material_id' => '1', 'size' => '25 × 80 × 20', 'price' => '1000', 'size_height' => '25', 'size_width' => '80', 'size_thickness' => '20', 'rotation_id' => '2'],
        ['material_id' => '1', 'size' => '25 × 90 × 20', 'price' => '1000', 'size_height' => '25', 'size_width' => '90', 'size_thickness' => '20', 'rotation_id' => '2'],
      ]
    );
  }
}
