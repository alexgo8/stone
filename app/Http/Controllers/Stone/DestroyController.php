<?php

namespace App\Http\Controllers\stone;

use App\Http\Controllers\Controller;
use App\Models\Stone;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function destroy($id) {
      $stone = Stone::findOrFail($id);
      $stone->delete();
      return redirect()->route('stones.index');

    }
}
