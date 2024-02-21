<?php

namespace App\Http\Controllers\Tomb;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Tomb;
use Illuminate\Http\Request;

class ShowController extends Controller
{
  public function show($id)
  {
    $tomb = Tomb::findOrFail($id);
    $materials = Material::all();
    return view('tombs.show', ['tomb' => $tomb, 'materials' => $materials]);
  }
}
