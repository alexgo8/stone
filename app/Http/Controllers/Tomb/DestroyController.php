<?php

namespace App\Http\Controllers\Tomb;

use App\Http\Controllers\Controller;
use App\Models\Tomb;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
  public function destroy($id)
  {
    $stone = Tomb::findOrFail($id);
    $stone->delete();
    return redirect()->route('tombs.index');
  }
}
