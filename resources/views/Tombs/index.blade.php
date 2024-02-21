@extends('layout.tombs')
@section('tombs.title')
  <title>Прайс-лист гробниц</title>
@endsection
@section('tombs.body')
  <div>
    <h1>Прайс-лист гробниц</h1>
  </div>
  <div>
    <ol>
      @foreach ($tombs as $tomb)
        <li>
          <div>Размер</div>
          <h2><a href="{{ route('tombs.show', $tomb->id) }}">{{ $tomb->size }}</a></h2>
          @foreach ($materials as $material)
            @if ($material->id == $tomb->material_id)
              <div>материал</div>
              <h3>{{ $material->name }}</h3>
            @endif
          @endforeach
          <div>цена</div>
          <h2>{{ number_format($tomb->price, 0, '', ' ') }} р</h2>
        </li>
      @endforeach
    </ol>
  </div>
  <div>
    <button><a href="{{ route('tombs.create') }}">Добавить позицию</a></button>
  </div>
@endsection
