<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show($id) {
      $material = Material::findOrFail($id);
      return view('materials.show', ['material' => $material]);
    }
}
