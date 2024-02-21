@extends('layout.installations')
@section('installations.title')
    <title>Изменить установку {{ $installation->size }}</title>
@endsection
@section('installations.body')
  <div>
    <h2>Форма изменения размера установки</h2>
  </div>
  <div>
    <form action="{{ route('installations.update', $installation->id) }}" method="post">
      @csrf
      @method('patch')
      <div>
        Размер установки
      </div>
      <div>
        <input type="text" name="size_height" id="size_height" value="{{ $installation->size_height }}">
        <label for="size_height">Высота в см</label>
      </div>
      <div>
        <input type="text" name="size_width" id="size_width" value="{{ $installation->size_width }}">
        <label for="size_width">Ширина в см</label>
      </div>
      <div>
        <select name="material_id" id="material_id">
          @foreach ($materials as $material)
            <option value="{{ $material->id }}" @if ($material->id == $installation->material_id) @selected(true) @endif>{{ $material->name }}
            </option>
          @endforeach
        </select>
        <label for="material_id">Категория</label>
      </div>
      <div>
        <input type="text" name="price" id="price" value="{{ $installation->price }}">
        <label for="price">Цена</label>
      </div>
      <div>
        <button>Изменить размер</button>
      </div>
    </form>
  </div>
  <div>
    <button><a href="{{ route('installations.show', $installation->id) }}">Отмена</a></button>
  </div>
@endsection
