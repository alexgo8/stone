<?php

namespace App\Http\Controllers\Tomb;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Tomb;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index()
  {
    $tombs = Tomb::all();
    $materials = Material::all();

    return view('tombs.index', ['tombs' => $tombs, 'materials' => $materials]);
  }
}
