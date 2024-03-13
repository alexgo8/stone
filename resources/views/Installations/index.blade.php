@extends('layout.installations')
@section('installations.title')
  <title>Прайс-лист установки</title>
@endsection
@section('installations.body')
  <div>

    <form action="{{ route('installations.index') }}" method="get">
      <div>
        <input type="text" name="search_string"
          @if (isset($_GET['search_string'])) value="{{ $_GET['search_string'] }}" @endif id="search_string">
        <label for="search_string">поиск</label>
      </div>

      <div>
        <select name="material" id="material">
          <option value="0">Все</option>
          @foreach ($materials as $material)
            <option value="{{ $material->id }}"
              @if (isset($_GET['material'])) @if ($_GET['material'] == $material->id)
                    @selected(true) @endif
              @endif>{{ $material->name }}</option>
          @endforeach
        </select>
        <label for="material">Категория</label>
      </div>

      <div>
        <button>Применить</button>
      </div>
    </form>
  </div>
  <div>
    <button><a href="{{ route('installations.index') }}">Сбросить</a></button>
  </div>
  <div>
    <h1>Прайс-лист установки</h1>
  </div>
  <div>
    <ol>
      @foreach ($installations as $installation)
        <li>
          <div>Размер</div>
          <h2><a href="{{ route('installations.show', $installation->id) }}">{{ $installation->size }}</a></h2>
          @foreach ($materials as $material)
            @if ($material->id == $installation->material_id)
              <div>материал</div>
              <h3>{{ $material->name }}</h3>
            @endif
          @endforeach
          <div>цена</div>
          <h2>{{ number_format($installation->price, 0, '', ' ') }} р</h2>
        </li>
      @endforeach
    </ol>
  </div>
  <div>
    <button><a href="{{ route('installations.create') }}">Добавить позицию</a></button>
  </div>

  <div>
    {{ $installations->withQueryString()->links('vendor.pagination.bootstrap-4') }}
  </div>
@endsection
