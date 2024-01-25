<?php

namespace App\Http\Controllers\Stone;

use App\Http\Controllers\Controller;
use App\Models\Stone;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
      $stones = Stone::all();
      return view('stones.index', compact('stones'));      
    }
}
