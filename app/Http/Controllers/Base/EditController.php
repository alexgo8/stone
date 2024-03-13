<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Rotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class EditController extends Controller
{
  public function edit($id)
  {
    $base = Cache::get('base:' . $id);
    $materials = Cache::rememberForever('materials:all', function () {
      return Material::all();
    });
    $rotations = Cache::rememberForever('rotations:all', function () {
      return Rotation::all();
    });
    return view('bases.edit', ['base' => $base, 'materials' => $materials, 'rotations' => $rotations]);
  }
}
