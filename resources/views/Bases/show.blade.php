@extends('layout.bases')
@section('bases.title')
  <title>{{ $base->size }}</title>
@endsection
@section('bases.body')
  <div>
    <div>
      <h2>{{ $base->size }}</h2>
    </div>
    <div>
      <h4>{{ $base->rotations->name }}</h4>
      <h3>{{ $base->materials->name }}</h3>
    </div>
    <div>
      <p>{{ $base->price }} руб.</p>
    </div>
    <div>
      <button><a href="{{ route('bases.edit', $base->id) }}">Изменить товар</a></button>
    </div>
    <div>
      <form action="{{ route('bases.destroy', $base->id) }}" method="post">
        @csrf
        @method('delete')
        <button>Удалить</button>
      </form>
    </div>
    <div>
      <button><a href="{{ route('bases.index') }}">Назад</a></button>
    </div>
  </div>
@endsection