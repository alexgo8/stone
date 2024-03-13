@extends('layout.materials')
@section('materials.title')
    <title>Просмотр вида камня</title>
@endsection
@section('materials.body')
    <div>
      <h3>Вид камня</h3>
    </div>
    <div>
      <p>Название вида</p>
      <h2>{{ $material->name }}</h2>
    </div>
    <div>
      <button><a href="{{ route('materials.edit', $material->id) }}">Редактировать</a></button>
    </div>
    <div>
      <form action="{{ route('materials.destroy', $material->id) }}" method="post">
        @csrf
        @method('delete')
        <button>Удалить</button>
      </form>
    </div>
    <div>
      <button><a href="{{ route('materials.index') }}">Назад</a></button>
    </div>
@endsection