<?php

namespace App\Http\Controllers\Stele;

use App\Http\Controllers\Controller;
use App\Http\Requests\Stele\StoreRequest;
use App\Models\Stele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
  public function store(StoreRequest $request)
  {
    $data = $request->validated();    
    $checkboxValuesArray = $data['checkboxBase'];
    unset($data['checkboxBase']);    
    $stele = Stele::create($data);
    Cache::put('stele:' . $stele->id, $stele);
    Cache::forget('steles:all');
    foreach ($checkboxValuesArray as $key => $value) {
      DB::table('stele_base')->insert([
        'stele_id' => $stele->id,
        'base_id' => $key
      ]);
    }
    
    return redirect()->route('steles.index');
  }
}
