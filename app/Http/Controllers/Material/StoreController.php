<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Http\Requests\Material\StoreRequest;
use App\Models\Material;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(StoreRequest $request) {

      $material = $request->validated();
      Material::create($material);
      return redirect()->route('materials.index');
    }
}
