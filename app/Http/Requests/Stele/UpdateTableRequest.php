<?php

namespace App\Http\Requests\Stele;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTableRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    
    return [
      'id.*' => 'required|integer',
      'size.*' => 'required',
      'price.*' => 'required|integer',
      'material_id.*' => 'required|integer',
      'rotation_id.*' => 'required|integer',
      'size_height.*' => 'required|integer',
      'size_width.*' => 'required|integer',
      'size_thickness.*' => 'required|integer'
    ];
  }

  public function messages()
  {    
    return [
      'price.*.required' => 'Поле цена пустое, введите числовое значение',
      'price.*.integer' => 'Поле цена должно содержать только цифровое значение',
      'size_height.*.required' => 'Поле высота пустое, введите числовое значение',
      'size_height.*.integer' => 'Поле высота должно содержать только цифровое значение',
      'size_width.*.required' => 'Поле ширина пустое, введите числовое значение',
      'size_width.*.integer' => 'Поле ширина должно содержать только цифровое значение',
      'size_thickness.*.required' => 'Поле толщина пустое, введите числовое значение',
      'size_thickness.*.integer' => 'Поле толщина должно содержать только цифровое значение',
    ];
  }
}
