<?php

namespace App\Http\Controllers\Installation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Installation\IndexRequest;
use App\Http\Resources\Installation\InstallationResource;
use App\Models\Installation;
use App\Models\Material;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function index(IndexRequest $request)
  {    
    $data = $request->all();
    $page = $data['page'] ?? 1;
    $perPage = $data['per_page'] ?? 5;
    $installations = Installation::paginate($perPage, ['*'], 'page', $page);
    $materials = Material::all();

    if (!empty($data)) {
      $arrFilter = [];

      if ($request->has('search_string') and $request->material != '') {
        $arrFilter[] = ['size', 'LIKE', '%' . $request->search_string . '%'];
      }

      if ($request->has('material') and $request->material != 0) {
        $arrFilter[] = ['material_id', '=', $request->material];
      }

      $installations = Installation::where($arrFilter)->paginate($perPage, ['*'], 'page', $page);
    }
    
    $arrFront = InstallationResource::collection($installations);
    
    return view('installations.index', ['installations' => $installations, 'materials' => $materials]);
  }
}