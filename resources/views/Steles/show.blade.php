@extends('layout.steles')
@section('steles.title')
  <title>Размер стелы {{ $stele->size }}</title>
@endsection
@section('steles.body')
  <div>
    <h2>Стела {{ $stele->size }}</h2>
    <div>
      <h4>Материал стелы</h4>
      <p>{{ $stele->materials->name }}</p>
    </div>

    <div>
      <h4>Расположение стелы</h4>
      <p>{{ $stele->rotations->name }}</p>
    </div>

    <div>
      <div>
        <h3>Доступные основания</h3>
      </div>
      <ul>
        @foreach ($stele->bases as $item)
          <li>
            <div>{{ $item->size }}</div>
          </li>
        @endforeach
      </ul>
    </div>

    <div>
      <div>
        <h3>Допустимый портрет</h3>
      </div>
      <p>Размер: {{ $stele->portraits->size }}</p>
      <h4>Стоимость гравировки портрета</h4>
      <p>{{ $stele->portraits->price }} рублей</p>
    </div>

    <div>
      <div>
        <h4>Стоимость гравировки имени</h4>
      </div>
      <p>{{ $stele->names->price }} рублей</p>
    </div>

    <div>
      <div>
        <h4>Стоимость базовой установки (при наличии подготовленной площадки)</h4>
      </div>
      <p>{{ $stele->installations->price }} рублей</p>
    </div>

    <div>
      <h3>Стоимость базовой стелы</h3>
      <p>{{ $stele->price }} рублей</p>
    </div>
    <div>
      <button><a href="{{ route('steles.edit', $stele->id) }}">Изменить товар</a></button>
    </div>
    <div>
      <form action="{{ route('steles.destroy', $stele->id) }}" method="post">
        @csrf
        @method('delete')
        <button>Удалить</button>
      </form>
    </div>
    <div>
      <button><a href="{{ route('steles.index') }}">Назад</a></button>
    </div>
  </div>
@endsection
