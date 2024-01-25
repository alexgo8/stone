@extends('layout.stones')
@section('stones.titel')
  <title>Феникс Гранит</title>
@endsection

@section('stones.body')
  <div>
    <div>
      <h1>Список товаров</h1>
    </div>
    <div>
      <ol>
        @foreach ($stones as $stone)
          <li>
            <div>
              <div>
                <h2><a href="{{ route('stones.show', $stone->id) }}">{{ $stone->titel }}</a></h2>
              </div>
              <div>
                <p>{{ $stone->description }}</p>
              </div>
            </div>
          </li>
        @endforeach
      </ol>
    </div>
    <div>
      <button><a href="{{ route('stones.create') }}">Добавить товар</a></button>
    </div>
  </div>
@endsection
