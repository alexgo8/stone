@extends('layout.bases')
@section('bases.title')
  <title>Добавить новый товар</title>
@endsection
@section('bases.body')
  <div>
    <div>
      <h2>Форма создания товара</h2>
    </div>
    <div>
      <form action="{{ route('bases.store') }}" method="POST">
        @csrf

        <div>
          <input type="text" name="size_height" id="size_height" value="{{ old('size_height') }}">
          <label for="size_height">Высота в см</label>
        </div>
        <div>
          @error('size_height')
            {{ $message }}    
          @enderror
        </div>

        <div>
          <input type="text" name="size_width" id="size_width" value="{{ old('size_width') }}">
          <label for="size_width">Ширина в см</label>
        </div>
        <div>
          @error('size_width')
            {{ $message }}    
          @enderror
        </div>

        <div>
          <input type="text" name="size_thickness" id="size_thickness" value="{{ old('size_thickness') }}">
          <label for="size_thickness">Толщина в см</label>
        </div>
        <div>
          @error('size_thickness')
            {{ $message }}    
          @enderror
        </div>

        <div>
          <select name="material_id" id="material_id">
            @foreach ($materials as $material)
              <option value="{{ $material->id }}" @if ($material->id == old('material_id')) @selected(true) @endif>
                {{ $material->name }}</option>
            @endforeach
          </select>
          <label for="material_id">Материал</label>
        </div>

        <div>
          <select name="rotation_id" id="rotation_id">
            @foreach ($rotations as $rotation)
              <option value="{{ $rotation->id }}" @if ($rotation->id == old('rotation_id')) @selected(true) @endif>
                {{ $rotation->name }}</option>
            @endforeach
          </select>
          <label for="rotation_id">Ротация</label>
        </div>

        <div>
          <input type="text" name="price" id="price" value="{{ old('price') }}">
          <label for="price">Цена</label>
        </div>
        <div>
          @error('price')
            {{ $message }}
          @enderror
        </div>

        <div>
          <button>Добавить</button>
        </div>
      </form>
    </div>
    <div>
      <button><a href="{{ route('bases.index') }}">Отменить</a></button>
    </div>
  </div>
@endsection
