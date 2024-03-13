<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit($id) {
      $material = Material::findOrFail($id);
      return view('materials.edit', ['material' => $material]);
    }
}
