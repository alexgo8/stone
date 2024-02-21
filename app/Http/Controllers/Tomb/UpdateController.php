<?php

namespace App\Http\Controllers\Tomb;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tomb\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
  public function update(UpdateRequest $request, $id)
  {
    $data = $request->validated();
    $size = $data['size_height'] . ' × ' . $data['size_width'] . ' × ' . $data['size_thickness'];
    DB::table('tombs')->where('id', '=', $id)->update([
      'size' => $size,
      'price' => $data['price'],
      'material_id' => $data['material_id'],
      'size_height' => $data['size_height'],
      'size_width' => $data['size_width'],
      'size_thickness' => $data['size_thickness']
    ]);

    return redirect()->route('tombs.show', $id);
  }
}
