@extends('layout.stones')
@section('stones.titel')
  <title>{{ $stone->titel }}</title>
@endsection
@section('stones.body')
  <div>
    <div>
      <h2>{{ $stone->titel }}</h2>
    </div>
    <div>
      <p>{{ $stone->description }}</p>
    </div>
    <div>
      <button><a href="{{ route('stones.edit', $stone->id) }}">Изменить товар</a></button>
    </div>
    <div>
      <form action="{{ route('stones.destroy', $stone->id) }}" method="post">
        @csrf
        @method('delete')
        <button>Удалить</button>
      </form>
    </div>
    <div>
      <button><a href="{{ route('stones.index') }}">Назад</a></button>
    </div>
  </div>
@endsection
