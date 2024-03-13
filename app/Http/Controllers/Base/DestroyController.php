<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use App\Models\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DestroyController extends Controller
{
  public function destroy($id)
  {
    $base = Base::findOrFail($id);
    Cache::forget('base:' . $base->id);
    Cache::forget('bases:all');
    $base->delete();
    return redirect()->route('bases.index');
  }
}
