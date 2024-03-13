<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('materials')->insert(
      [
        ['name' => 'Гранит'], 
        ['name' => 'Цветной гранит'], 
        ['name' => 'Мрамор']
      ]);
    }
}
