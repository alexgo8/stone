<?php

namespace App\Http\Controllers\Installation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Installation\StoreRequest;
use App\Models\Installation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
  public function store(StoreRequest $request)
  {
    $installation = $request->validated();
    $size = $installation['size_height'] . ' × ' . $installation['size_width'] ;
    
    DB::table('installations')->insert([
      [
        'size' => $size,
        'price' => $installation['price'],
        'material_id' => $installation['material_id'],
        'size_height' => $installation['size_height'],
        'size_width' => $installation['size_width']
      ]
    ]);    
    return redirect()->route('installations.index');
  }
}
