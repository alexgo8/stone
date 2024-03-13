@extends('layout.bases')
@section('bases.title')
  <title>Изменить {{ $base->size }}</title>
@endsection
@section('bases.body')
  <div>
    <form action="{{ route('bases.update', $base->id) }}" method="POST">
      @csrf
      @method('patch')
      <div>
        <input type="text" name="size_height" id="size_height"
          @if ($errors->any()) value="{{ old('size_height') }}"
         @else 
          value="{{ $base->size_height }}" @endif>
        <label for="size_height">Высота в см</label>
      </div>
      @error('size_height')
        {{ $message }}
      @enderror
      <div>
        <input type="text" name="size_width" id="size_width"
          @if ($errors->any()) value="{{ old('size_width') }}"
         @else 
          value="{{ $base->size_width }}" @endif>
        <label for="size_width">Ширина в см</label>
      </div>
      @error('size_width')
        {{ $message }}
      @enderror
      <div>
        <input type="text" name="size_thickness" id="size_thickness"
          @if ($errors->any()) value="{{ old('size_thickness') }}"
         @else 
          value="{{ $base->size_thickness }}" @endif>
        <label for="size_thickness">Толщина в см</label>
      </div>
      @error('size_thickness')
        {{ $message }}
      @enderror
      <div>
        <select name="material_id" id="material_id">
          @foreach ($materials as $material)
            <option value="{{ $material->id }}"
              @if ($errors->any() and old('material_id') == $material->id) @selected(true) @elseif (!$errors->any() and $material->id == $base->material_id) @selected(true) @endif>
              {{ $material->name }}
            </option>
          @endforeach
        </select>
        <label for="material_id">Категория</label>
      </div>
      <div>
        <select name="rotation_id" id="rotation_id">
          @foreach ($rotations as $rotation)
            <option value="{{ $rotation->id }}"
              @if ($errors->any() and old('rotation_id') == $rotation->id) @selected(true) @elseif (!$errors->any() and $rotation->id == $base->rotation_id) @selected(true) @endif>
              {{ $rotation->name }}
            </option>
          @endforeach
        </select>
        <label for="material_id">Ротация</label>
      </div>
      <div>
        <input type="text" name="price" id="price"
          @if ($errors->any()) value="{{ old('price') }}"
         @else 
          value="{{ $base->price }}" @endif>
        <label for="price">Цена</label>
      </div>
      @error('price')
        {{ $message }}
      @enderror
      <div>
        <button>Изменить</button>
      </div>
    </form>
  </div>
  <div>
    <button><a href="{{ route('bases.show', $base->id) }}">Отменить</a></button>
  </div>
@endsection