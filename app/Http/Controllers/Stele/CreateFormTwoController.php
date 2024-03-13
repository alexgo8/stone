<?php

namespace App\Http\Controllers\Stele;

use App\Http\Controllers\Controller;
use App\Http\Requests\Stele\BeforeStoreRequest;
use App\Http\Requests\Stele\FormTwoRequest;
use App\Models\Base;
use App\Models\Installation;
use App\Models\Material;
use App\Models\NameEngraving;
use App\Models\PortraitEngraving;
use App\Models\Rotation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CreateFormTwoController extends Controller
{
  public function create(BeforeStoreRequest $request)
  {    
    $data = $request->validated();
    $data['size'] = $data['size_height'] . '×' . $data['size_width'] . '×' . $data['size_thickness'];    
    $materials = Cache::rememberForever('material:all', function () {
      return Material::all();
    });
    $rotations = Cache::rememberForever('rotation:all', function () {
      return Rotation::all();
    });
    $bases = Cache::rememberForever('bases:all', function () {
      return Base::all();
    });

    $installations = Cache::rememberForever('installations:all', function () {
      return Installation::all();
    });

    $portraits = Cache::rememberForever('portraits:all', function() {
      return PortraitEngraving::all();
    });

    $names = Cache::rememberForever('names:all', function () {
      return NameEngraving::all();
    });

    return view('steles.create-form-two', ['data' => $data, 'materials' => $materials, 'rotations' => $rotations, 'bases' => $bases, 'installations' => $installations, 'portraits' => $portraits, 'names' => $names]);
  }
}