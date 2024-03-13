<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
      $materials = Material::all();
      
      return view('materials.index', ['materials' => $materials]);
    }
}
