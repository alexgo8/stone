@extends('layout.installations')
@section('installations.title')
  <title>Добавить новый размер установки</title>
@endsection
@section('installations.body')
  <div>
    <h2>Форма добавления нового размера установки</h2>
  </div>
  <div>
    <form action="{{ route('installations.store') }}" method="post">
      @csrf
      <div>
        Размер установки
      </div>
      <div>
        <input type="text" name="size_height" id="size_height">
        <label for="size_height">Высота в см</label>
      </div>
      <div>
        <input type="text" name="size_width" id="size_width">
        <label for="size_width">Ширина в см</label>
      </div>

      <div>
        <select name="material_id" id="material_id">
          @foreach ($materials as $material)
            <option value="{{ $material->id }}">{{ $material->name }}</option>
          @endforeach
        </select>
        <label for="material_id">Категория</label>
      </div>
      <div>
      <input type="text" name="price" id="price">
      <label for="price">Цена</label>
      </div>
      <div>
        <button>Добавить размер</button>
      </div>
    </form>
  </div>
@endsection
