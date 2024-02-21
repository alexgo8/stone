<?php

namespace App\Http\Controllers\Installation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Installation\UpdateRequest;
use App\Models\Installation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpdateController extends Controller
{
  public function update(UpdateRequest $request, $id)
  {
    $data = $request->validated();
    $size = $data['size_height'] . ' × ' . $data['size_width'];
    DB::table('installations')->where('id', '=', $id)->update([
      'size' => $size,
      'price' => $data['price'],
      'material_id' => $data['material_id'],
      'size_height' => $data['size_height'],
      'size_width' => $data['size_width']
    ]);
    
    return redirect()->route('installations.show', $id);
  }
}
