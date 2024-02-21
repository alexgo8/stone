<?php

namespace App\Http\Controllers\Installation;

use App\Http\Controllers\Controller;
use App\Models\Installation;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
  public function destroy($id)
  {
    $installation = Installation::findOrFail($id);
    $installation->delete();
    return redirect()->route('installations.index');
  }
}
