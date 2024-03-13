<?php

namespace App\Http\Controllers\Base;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ShowController extends Controller
{
  public function show($id)
  {
    $base = Cache::get('base:' . $id);
    return view('bases.show', ['base' => $base]);
  }
}
