<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function destroy($id) {
      $material = Material::findOrFail($id);
      $material->delete();
      return redirect()->route('materials.index');
    }
}
