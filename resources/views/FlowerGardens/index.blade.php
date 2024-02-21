@extends('layout.flowergardens')
@section('flowergardens.title')
  <title>Прайс-лист цветников</title>
@endsection
@section('flowergardens.body')
  <div>
    <h1>Прайс-лист цветников</h1>
  </div>
  <div>
    <ol>
      @foreach ($flowergardens as $flowergarden)
        <li>
          <div>Размер</div>
          <h2><a href="{{ route('flowergardens.show', $flowergarden->id) }}">{{ $flowergarden->size }}</a></h2>
          @foreach ($materials as $material)
            @if ($material->id == $flowergarden->material_id)
              <div>материал</div>
              <h3>{{ $material->name }}</h3>
            @endif
          @endforeach
          <div>цена</div>
          <h2>{{ number_format($flowergarden->price, 0, '', ' ') }} р</h2>
        </li>
      @endforeach
    </ol>
  </div>
  <div>
    <button><a href="{{ route('flowergardens.create') }}">Добавить позицию</a></button>
  </div>
@endsection
