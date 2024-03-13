@extends('layout.materials')
@section('materials.title')
<title>Изменить вид камня</title>    
@endsection
@section('materials.body')
    <div>
      <form action="{{ route('materials.update', $material->id) }}" method="post">
        @csrf
        @method('patch')
        <div>
          <input type="text" name="name" id="name" value="{{ $material->name }}">
          <label for="name">Название вида камня</label>
        </div>
        <button>Изменить</button>
      </form>
    </div>
    <div>
      <button><a href="{{ route('materials.show', $material->id) }}">Отменить</a></button>
    </div>
@endsection
