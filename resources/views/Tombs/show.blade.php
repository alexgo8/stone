@extends('layout.tombs')
@section('tombs.title')
  <title>Установка {{ $tomb->size }}</title>
@endsection
@section('tombs.body')
  <div>
    <div>
      <p>размер</p>
    </div>
    <div>
      <h2>{{ $tomb->size }}</h2>
    </div>
    <div>
      @foreach ($materials as $material)
        @if ($material->id == $tomb->material_id)
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
      <h2>{{ number_format($tomb->price, 0, '', ' ') }} р</h2>
    </div>

    <div>
      <button><a href="{{ route('tombs.edit', $tomb->id) }}">Изменить товар</a></button>
    </div>
    <div>
      <form action="{{ route('tombs.destroy', $tomb->id) }}" method="post">
        @csrf
        @method('delete')
        <button>Удалить</button>
      </form>
    </div>
    <div>
      <button><a href="{{ route('tombs.index') }}">Назад</a></button>
    </div>
  </div>
@endsection

