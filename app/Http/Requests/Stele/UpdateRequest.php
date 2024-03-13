<?php

namespace App\Http\Requests\Stele;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
      'size_height' => 'required',
      'size_width' => 'required',
      'size_thickness' => 'required',
      'price' => 'required',
      'material_id' => 'required',
      'rotation_id' => 'required',
      'checkboxBase' => 'required',
      'installation_id' => 'required',
      'name_id' => 'required',
      'portrait_id' => 'required',      
    ];
  }

  public function messages()
  {
    return [
      'price.required' => 'Поле цена пустое, введите числовое значение',
      'price.integer' => 'Поле цена должно содержать только цифровое значение',
      'size_height.required' => 'Поле высота пустое, введите числовое значение',
      'size_height.integer' => 'Поле высота должно содержать только цифровое значение',
      'size_width.required' => 'Поле ширина пустое, введите числовое значение',
      'size_width.integer' => 'Поле ширина должно содержать только цифровое значение',
      'size_thickness.required' => 'Поле толщина пустое, введите числовое значение',
      'size_thickness.integer' => 'Поле толщина должно содержать только цифровое значение',
      'installation_id.required' => 'Не указана стоимость установки',
      'name_id.required' => 'Не указана стоимость гравировки имени',
      'portrait_id.required' => 'Не указана стоимость гравировки портрета',
      'checkboxBase.required' => 'Не выбрано ни одно основание'    
    ];
  }
}
