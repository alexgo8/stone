<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Http\Requests\Base\StoreRequest;
use App\Models\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StoreController extends Controller
{
  public function store(StoreRequest $request)
  {
    $data = $request->validated();
    $data['size'] = $data['size_height'] . '×' . $data['size_width'] . '×' . $data['size_thickness'];
    $base = Base::create($data);
    Cache::put('base:' . $base->id, $base);
    Cache::forget('bases:all');

    return redirect()->route('bases.index');
  }
}
