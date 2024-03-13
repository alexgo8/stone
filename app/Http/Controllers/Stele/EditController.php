<?php

namespace App\Http\Controllers\Stele;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Rotation;
use App\Models\Stele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class EditController extends Controller
{
  public function edit($id)
  {
    $stele = Cache::get('stele:' . $id);
    $materials = Cache::rememberForever('materials:all', function () {
      return Material::all();
    });
    $rotations = Cache::rememberForever('rotations:all', function () {
      return Rotation::all();
    });
    return view('steles.edit', ['stele' => $stele, 'materials' => $materials, 'rotations' => $rotations]);
  }
}