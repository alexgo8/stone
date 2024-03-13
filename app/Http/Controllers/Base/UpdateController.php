<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Http\Requests\Base\UpdateRequest;
use App\Models\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class UpdateController extends Controller
{
  public function update(UpdateRequest $request, $id)
  {
    $data = $request->validated();
    $base = Base::findOrFail($id);
    $base->update($data);
    Cache::put('base:' . $id, $base);
    Cache::forget('bases:all');
    return redirect()->route('bases.show', $base->id);
  }
}
