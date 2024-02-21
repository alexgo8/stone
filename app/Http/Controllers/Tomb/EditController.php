<?php

namespace App\Http\Controllers\Tomb;

use App\Http\Controllers\Controller;
use App\Models\Material;
use App\Models\Tomb;
use Illuminate\Http\Request;

class EditController extends Controller
{
  public function edit($id)
  {
    $tomb = Tomb::findOrFail($id);
    $materials = Material::all();
    return view('tombs.edit', ['tomb' => $tomb, 'materials' => $materials]);
  }
}
