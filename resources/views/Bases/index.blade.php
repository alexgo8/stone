@extends('layout.bases')
@section('bases.title')
  <title>Каталог оснований</title>
@endsection

@section('bases.body')
  <div>
    <div>
      <h1>Каталог основани</h1>
    </div>
    <div>
      <ol>
        @foreach ($bases as $base)
          <li>
            <div>
              <div>
                <h2><a href="{{ route('bases.show', $base->id) }}">{{ $base->size }}</a></h2>
              </div>
              <div>
                <h4>{{ $base->rotations->name }}</h4>
                <h3>{{ $base->materials->name }}</h3>
              </div>
              <div>
                <p>{{ $base->price }} руб.</p>
              </div>
            </div>
          </li>
        @endforeach
      </ol>
    </div>
    <div>
      <button><a href="{{ route('bases.create') }}">Добавить товар</a></button>
    </div>
  </div>
