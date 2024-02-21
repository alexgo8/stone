@extends('layout.installations')
@section('installations.title')
  <title>Установка {{ $installation->size }}</title>
@endsection
@section('installations.body')
  <div>
    <div>
      <p>размер</p>
    </div>
    <div>
      <h2>{{ $installation->size }}</h2>
    </div>
    <div>
      @foreach ($materials as $material)
        @if ($material->id == $installation->material_id)
          <div>
            <p>материал</p>
          </div>
          <h3>{{ $material->name }}</h3>
        @endif
      @endforeach
    </div>
    <div>
      <p>цена</p>
    </div>
    <div>
      <h2>{{ number_format($installation->price, 0, '', ' ') }} р</h2>
    </div>

    <div>
      <button><a href="{{ route('installations.edit', $installation->id) }}">Изменить товар</a></button>
    </div>
    <div>
      <form action="{{ route('installations.destroy', $installation->id) }}" method="post">
        @csrf
        @method('delete')
        <button>Удалить</button>
      </form>
    </div>
    <div>
      <button><a href="{{ route('installations.index') }}">Назад</a></button>
    </div>
  </div>
@endsection
