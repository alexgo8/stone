<?php

namespace App\Http\Controllers\Installation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Installation\IndexRequest;
use App\Http\Resources\Installation\InstallationResource;
use App\Models\Installation;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//система фильтров работает следующим образом: если приходит запрос с полей фильтр, то мы попадаем в условие !empty($data), в этом условии компилятор проходит по всем условиям и собирает массив массивов с условиями для поиска из базы данных, далее этот массив массивов перебирается в цикле, где формируется запрос к базе. каждый массив содержит три значения: поле поиска, оператор, и то что ищем. 

class IndexController extends Controller
{
  public function index(IndexRequest $request)
  {
    $data = $request->all();
    $page = $data['page'] ?? 1;
    $perPage = $data['per_page'] ?? 5;
    $installations = Installation::paginate($perPage, ['*'], 'page', $page);
    $materials = Material::all();

    if (!empty($data)) {    //если запрос не пустой, то мы попадаем в условие
      $arrFilter = [];      
      if ($request->search_string != null and $request->material == 0) {
        $arrFilter[] = ['size', 'LIKE', '%' . $request->search_string . '%']; //оператор LIKE позволяет искать определённый текст в определённом поле, регулярка означает в любом месте
        $string = $request->search_string;
        if (mb_detect_encoding($string) == 'ASCII') {
          $char = mb_strtoupper(substr($request->search_string, 0, 1), "ASCII");//меняем первый символ в верхний регистр
          $string[0] = $char[0];
          
        }
        if (mb_detect_encoding($string) == 'UTF-8') {
          $char = mb_strtoupper(substr($request->search_string, 0, 2), "utf-8");//меняем первый символ в верхний регистр
          $string[0] = $char[0];
          $string[1] = $char[1];
        }        
        
        foreach ($materials as $material) {
          if ($material->name == $request->search_string or $material->name == $string or $material->name == mb_convert_case($request->search_string, MB_CASE_TITLE, "UTF-8")) { //mb_convert_case конвертирует заглавные буквы в верхний регистр            
            $arrFilter[] = ['material_id', '=', $material->id];            
          }
        }
      }

      if ($request->has('material') and $request->material != 0) {
        $arrFilter[] = ['material_id', '=', $request->material];
      }

      $sql = DB::table('installations');
      foreach ($arrFilter as $filter) {
        $sql->orWhere($filter[0], $filter[1], $filter[2]);
      }
      $installations = $sql->paginate($perPage, ['*'], 'page', $page);
    }

    $arrFront = InstallationResource::collection($installations);

    return view('installations.index', ['installations' => $installations, 'materials' => $materials]);
  }
}
