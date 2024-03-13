<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Rotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CreateController extends Controller
{
  public function create()
  {
    $materials = Cache::rememberForever('material:all', function () {
      return Material::all();
    });
    $rotations = Cache::rememberForever('rotation:all', function () {
      return Rotation::all();
    });
    return view('bases.create', ['materials' => $materials, 'rotations' => $rotations]);
  }
}
