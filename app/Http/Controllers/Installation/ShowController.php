<?php

namespace App\Http\Controllers\Installation;

use App\Http\Controllers\Controller;
use App\Models\Installation;
use App\Models\Material;
use Illuminate\Http\Request;

class ShowController extends Controller
{
  public function show($id)
  {
    $installation = Installation::findOrFail($id);
    $materials = Material::all();    
    return view('installations.show', ['installation' => $installation, 'materials' => $materials]);
  }
}
