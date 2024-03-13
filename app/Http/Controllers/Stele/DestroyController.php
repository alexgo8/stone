<?php

namespace App\Http\Controllers\Stele;

use App\Http\Controllers\Controller;
use App\Models\Stele;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DestroyController extends Controller
{
  public function destroy($id)
  {    
    $stele = Stele::findOrFail($id);
    Cache::forget('stele:' . $stele->id);
    Cache::forget('steles:all');
    $stele->delete();    
    return redirect()->route('steles.index');
  }
}