<?php

namespace App\Http\Controllers\Stele;

use App\Http\Controllers\Controller;
use App\Http\Requests\Stele\UpdateTableRequest;
use App\Models\Stele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UpdateTableController extends Controller
{
  public function update(UpdateTableRequest $request)
  {
    $data = $request->validated();
    foreach ($data as $key => $array) {
      $count = 0;
      foreach ($array as $value) {
        $steleArrays[$count][$key] = $value;
        $count++;
      }
    }
    foreach ($steleArrays as $steleArray) {
      $steleArray['size'] = $steleArray['size_height'] . '×' . $steleArray['size_width'] . '×' . $steleArray['size_thickness'];
      $stele = Stele::findOrFail($steleArray['id']);
      $stele->update($steleArray);
      Cache::put('stele:' . $steleArray['id'], $stele);
    }
    Cache::forget('steles:all');
    return redirect()->route('steles-table.index');
  }
}
