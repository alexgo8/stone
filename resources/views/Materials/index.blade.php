@extends('layout.materials')
@section('materials.title')
  <title>Виды камня</title>
@endsection
@section('materials.body')
  <div>
    <h1>Виды камня</h1>
  </div>
  <div>
    <ol>
      @foreach ($materials as $material)
        <li>
          <h2><a href="{{ route('materials.show', $material->id) }}">{{ $material->name }}</a></h2>
        </li>
      @endforeach
    </ol>
  </div>
  <div>
    <button><a href="{{ route('materials.create') }}">Добавить новый вид</a></button>
  </div>
@endsection
