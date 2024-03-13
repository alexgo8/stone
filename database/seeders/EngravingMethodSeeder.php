<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EngravingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('engraving-methods')->insert(
          [
            ['name' => 'Гравировка портрета'], 
            ['name' => 'Гранитная вставка']
          ]);
    }
}
