<?php

namespace App\Http\Controllers\Tomb;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tomb\StoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
  public function store(StoreRequest $request)
  {
    $tomb = $request->validated();
    $size = $tomb['size_height'] . ' × ' . $tomb['size_width'] . ' × ' . $tomb['size_thickness'];

    DB::table('tombs')->insert([
      [
        'size' => $size,
        'price' => $tomb['price'],
        'material_id' => $tomb['material_id'],
        'size_height' => $tomb['size_height'],
        'size_width' => $tomb['size_width'],
        'size_thickness' => $tomb['size_thickness']

      ]
    ]);
    return redirect()->route('tombs.index');
  }
}
