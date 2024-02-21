@extends('layout.flowergardens')
@section('flowergardens.title')
    <title>Изменить цветник {{ $flowergarden->size }}</title>
@endsection
@section('flowergardens.body')
  <div>
    <h2>Форма изменения цветника</h2>
  </div>
  <div>
    <form action="{{ route('flowergardens.update', $flowergarden->id) }}" method="post">
      @csrf
      @method('patch')
      <div>
        Размер гробницы
      </div>
      <div>
        <input type="text" name="size_height" id="size_height" value="{{ $flowergarden->size_height }}">
        <label for="size_height">Высота в см</label>
      </div>
      <div>
        <input type="text" name="size_width" id="size_width" value="{{ $flowergarden->size_width }}">
        <label for="size_width">Ширина в см</label>
      </div>
      <div>
        <input type="text" name="size_thickness" id="size_thickness" value="{{ $flowergarden->size_thickness }}">
        <label for="size_thickness">Толщина в см</label>
      </div>

      <div>
        <select name="material_id" id="material_id">
          @foreach ($materials as $material)
            <option value="{{ $material->id }}" @if ($material->id == $flowergarden->material_id) @selected(true) @endif>{{ $material->name }}
            </option>
          @endforeach
        </select>
        <label for="material_id">Категория</label>
      </div>
      <div>
        <input type="text" name="price" id="price" value="{{ $flowergarden->price }}">
        <label for="price">Цена</label>
      </div>
      <div>
        <button>Изменить гробницу</button>
      </div>
    </form>
  </div>
  <div>
    <button><a href="{{ route('flowergardens.show', $flowergarden->id) }}">Отмена</a></button>
  </div>
@endsection


