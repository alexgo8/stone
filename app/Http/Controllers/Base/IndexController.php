<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\Base;
use App\Models\Material;
use App\Models\Rotation;
use App\Models\Stele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
  public function index()
  {
    $bases = Cache::rememberForever('bases:all', function () {
      return Base::all();
    });
    $materials = Cache::rememberForever('materials:all', function () {
      return Material::all();
    });
    $rotations = Cache::rememberForever('rotations:all', function () {
      return Rotation::all();
    });
    return view('bases.index', ['bases' => $bases, 'materials' => $materials, 'rotations' => $rotations]);
  }
}
