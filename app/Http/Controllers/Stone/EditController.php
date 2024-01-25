<?php

namespace App\Http\Controllers\stone;

use App\Http\Controllers\Controller;
use App\Models\Stone;
use Illuminate\Http\Request;

class EditController extends Controller
{
  public function edit($id)
  {
    $stone = Stone::findOrFail($id);
    return view('stones.edit', compact('stone'));
  }
}
