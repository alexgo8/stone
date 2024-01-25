<?php

namespace App\Http\Controllers\stone;

use App\Http\Controllers\Controller;
use App\Models\Stone;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show($id) {
      $stone = Stone::findOrFail($id);
      return view('stones.show', compact('stone'));
    }
}
