<?php

namespace App\Http\Controllers\Installation;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class CreateController extends Controller
{
  public function create()
  {
    $materials = Material::all();
    return view('installations.create', ['materials' => $materials]);
    
  }
}
