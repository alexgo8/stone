<?php

namespace App\Http\Controllers\Material;

use App\Http\Controllers\Controller;
use App\Http\Requests\Material\UpdateRequest;
use App\Models\Material;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(UpdateRequest $request, $id) {
      $material = Material::findOrFail($id);
      $data = $request->validated();
      $material->update($data);
      return redirect()->route('materials.show', $material->id);
    }
}
