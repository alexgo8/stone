<?php

namespace App\Http\Controllers\Stele;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Rotation;
use App\Models\Stele;
use App\Models\SteleBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
  public function index()
  {
    $steles = Cache::rememberForever('steles:all', function () {
      return Stele::all();
    });
    $materials = Cache::rememberForever('materials:all', function () {
      return Material::all();
    });
    $rotations = Cache::rememberForever('rotations:all', function () {
      return Rotation::all();
    });

    return view('steles.index', ['steles' => $steles, 'materials' => $materials, 'rotations' => $rotations]);
  }
}
