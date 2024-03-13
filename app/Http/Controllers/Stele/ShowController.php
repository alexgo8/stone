<?php

namespace App\Http\Controllers\Stele;

use App\Http\Controllers\Controller;
use App\Models\Stele;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ShowController extends Controller
{
    public function show($id) {
    Cache::rememberForever('steles:all', function () {
      return Stele::all();
    });      
      $stele = Cache::get('stele:' . $id);      
      return view('steles.show', ['stele' => $stele]);
    }
}