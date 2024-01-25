<?php

namespace App\Http\Controllers\stone;

use App\Http\Controllers\Controller;
use App\Http\Requests\Stone\UpdateRequest;
use App\Models\Stone;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(UpdateRequest $request, $id) {
      $stone = Stone::findOrFail($id);
      $data = $request->validated();
      $stone->update($data);
      return redirect()->route('stones.show', $stone->id);
    }
}
