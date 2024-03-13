<?php

namespace App\Http\Controllers\Stele;

use App\Http\Controllers\Controller;
use App\Http\Requests\Stele\BeforeUpdateRequest;
use App\Models\Base;
use App\Models\Installation;
use App\Models\Material;
use App\Models\NameEngraving;
use App\Models\PortraitEngraving;
use App\Models\Rotation;
use App\Models\Stele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class EditFormTwoController extends Controller
{
  public function edit(BeforeUpdateRequest $request, $id)
  {

    $data = $request->validated();
    $data['size'] = $data['size_height'] . '×' . $data['size_width'] . '×' . $data['size_thickness'];
    $stele = Stele::findOrFail($id);
    $stele->update($data);
    Cache::put('stele:' . $id, $stele);
    Cache::forget('steles:all');
    $data['id'] = $id;
    $stele = Cache::get('stele:' . $id);
    $materials = Cache::rememberForever('material:all', function () {
      return Material::all();
    });

    $rotations = Cache::rememberForever('rotations:all', function () {
      return Rotation::all();
    });

    $bases = Cache::rememberForever('bases:all', function () {
      return Base::all();
    });

    $installations = Cache::rememberForever('installations:all', function () {
      return Installation::all();
    });

    $portraits = Cache::rememberForever('portraits:all', function () {
      return PortraitEngraving::all();
    });

    $names = Cache::rememberForever('names:all', function () {
      return NameEngraving::all();
    });

    return view('steles.edit-form-two', ['data' => $data, 'materials' => $materials, 'rotations' => $rotations, 'bases' => $bases, 'installations' => $installations, 'portraits' => $portraits, 'names' => $names, 'stele' => $stele]);
  }
}
