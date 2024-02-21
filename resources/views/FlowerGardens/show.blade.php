@extends('layout.flowergardens')
@section('flowergardens.title')
  <title>Цветник {{ $flowergarden->size }}</title>
@endsection
@section('flowergardens.body')
  <div>    
    <div>
      <h2>{{ $flowergarden->size }}</h2>
    </div>
    <div>
      @foreach ($materials as $material)
        @if ($material->id == $flowergarden->material_id)
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
      <h2>{{ number_format($flowergarden->price, 0, '', ' ') }} р</h2>
    </div>

    <div>
      <button><a href="{{ route('flowergardens.edit', $flowergarden->id) }}">Изменить товар</a></button>
    </div>
    <div>
      <form action="{{ route('flowergardens.destroy', $flowergarden->id) }}" method="post">
        @csrf
        @method('delete')
        <button>Удалить</button>
      </form>
    </div>
    <div>
      <button><a href="{{ route('flowergardens.index') }}">Назад</a></button>
    </div>
  </div>
@endsection

