<?php

namespace App\Http\Controllers\Stone;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create() {
      $categories = Category::all();
      return view('stones.create', compact('categories'));
    }
}
