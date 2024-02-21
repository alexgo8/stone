@extends('layout.tombs')
@section('tombs.title')
    <title>Изменить гробницу {{ $tomb->size }}</title>
@endsection
@section('tombs.body')
  <div>
    <h2>Форма изменения гробницы</h2>
  </div>
  <div>
    <form action="{{ route('tombs.update', $tomb->id) }}" method="post">
      @csrf
      @method('patch')
      <div>
        Размер гробницы
      </div>
      <div>
        <input type="text" name="size_height" id="size_height" value="{{ $tomb->size_height }}">
        <label for="size_height">Высота в см</label>
      </div>
      <div>
        <input type="text" name="size_width" id="size_width" value="{{ $tomb->size_width }}">
        <label for="size_width">Ширина в см</label>
      </div>
      <div>
        <input type="text" name="size_thickness" id="size_thickness" value="{{ $tomb->size_thickness }}">
        <label for="size_thickness">Толщина в см</label>
      </div>

      <div>
        <select name="material_id" id="material_id">
          @foreach ($materials as $material)
            <option value="{{ $material->id }}" @if ($material->id == $tomb->material_id) @selected(true) @endif>{{ $material->name }}
            </option>
          @endforeach
        </select>
        <label for="material_id">Категория</label>
      </div>
      <div>
        <input type="text" name="price" id="price" value="{{ $tomb->price }}">
        <label for="price">Цена</label>
      </div>
      <div>
        <button>Изменить гробницу</button>
      </div>
    </form>
  </div>
  <div>
    <button><a href="{{ route('tombs.show', $tomb->id) }}">Отмена</a></button>
  </div>
@endsection

