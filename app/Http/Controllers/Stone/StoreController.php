<?php

namespace App\Http\Controllers\stone;

use App\Http\Controllers\Controller;
use App\Http\Requests\Stone\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Stone;


class StoreController extends Controller
{
    public function store(StoreRequest $request) {
      $data = $request->validated();
      Stone::create($data);
      return redirect()->route('stones.index');
    }
}
