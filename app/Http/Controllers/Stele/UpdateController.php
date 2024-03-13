<?php

namespace App\Http\Controllers\Stele;

use App\Http\Controllers\Controller;
use App\Http\Requests\Stele\UpdateRequest;
use App\Models\Stele;
use App\Models\SteleBase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
  public function update(UpdateRequest $request, $id)
  {    
    $data = $request->validated();    
    $data['size'] = $data['size_height'] . '×' . $data['size_width'] . '×' . $data['size_thickness'];    
    $checkboxValuesArray = $data['checkboxBase'];
    unset($data['checkboxBase']);
    $stele = Stele::findOrFail($id);
    $stele->update($data);
    Cache::put('stele:' . $stele->id, $stele);
    Cache::forget('steles:all');
    
    $stelesBases = SteleBase::all();
    foreach ($stelesBases as $steleBase) {
      if ($steleBase->stele_id == $id) {        
        $findSteleBase = SteleBase::findOrFail($steleBase->id);
        $findSteleBase->delete();
      }
    }
    
    foreach ($checkboxValuesArray as $key => $value) {
      DB::table('stele_base')->insert([
        'stele_id' => $stele->id,
        'base_id' => $key
      ]);
    }

    return redirect()->route('steles.show', $stele->id);    
  }
}