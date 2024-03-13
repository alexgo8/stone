@extends('layout.steles')
@section('steles.title')
  <title>Каталог стел</title>
@endsection

@section('steles.body')
  <div>
    <div>
      <h1>Каталог стел</h1>
    </div>
    <div>
      <ol>
        @foreach ($steles as $stele)
          <li>
            <div>
              <div>
                <h2><a href="{{ route('steles.show', $stele->id) }}">{{ $stele->size }}</a></h2>
              </div>

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

            </div>
          </li>
        @endforeach
      </ol>
    </div>
    <div>
      <button><a href="{{ route('steles.create') }}">Добавить товар</a></button>
    </div>
  </div>
