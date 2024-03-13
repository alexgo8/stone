@extends('layout.steles')
@section('steles.title')
  <title>Добавить новый товар</title>
@endsection
@section('steles.body')
  <div>
    <div>
      <h2>Внесите данные товара</h2>
    </div>
    <div>
      <form action="{{ route('steles.create-form-two') }}" method="get">
        @csrf
        <div>
          <input type="text" name="size_height" id="size_height"
            @if (request()->query() and !old('size_height')) @foreach (request()->query() as $dataArr)
                @foreach ($dataArr as $key => $value)
                  @if ($key == 'size_height')
                    value = "{{ $value }}" @endif
            @endforeach
          @endforeach
        @else
          value = "{{ old('size_height') }}"
          @endif>
          <label for="size_height">Высота в см</label>
        </div>
        <div>
          @error('size_height')
            {{ $message }}
          @enderror
        </div>

        <div>
          <input type="text" name="size_width" id="size_width"
            @if (request()->query() and !old('size_width')) @foreach (request()->query() as $dataArr)
                @foreach ($dataArr as $key => $value)
                  @if ($key == 'size_width')
                    value = "{{ $value }}" @endif
            @endforeach
          @endforeach
        @else
          value = "{{ old('size_width') }}"
          @endif>
          <label for="size_width">Ширина в см</label>
        </div>
        <div>
          @error('size_width')
            {{ $message }}
          @enderror
        </div>

        <div>
          <input type="text" name="size_thickness" id="size_thickness"
            @if (request()->query() and !old('size_thickness')) @foreach (request()->query() as $dataArr)
                @foreach ($dataArr as $key => $value)
                  @if ($key == 'size_thickness')
                    value = "{{ $value }}" @endif
            @endforeach
          @endforeach
        @else
          value = "{{ old('size_thickness') }}"
          @endif >
          <label for="size_thickness">Толщина в см</label>
        </div>
        <div>
          @error('size_thickness')
            {{ $message }}
          @enderror
        </div>

        <div>
          <select name="material_id" id="material_id">
            @foreach ($materials as $material)
              <option value="{{ $material->id }}"
                @if (request()->query() and !old('material_id')) @foreach (request()->query() as $dataArr)
                  @foreach ($dataArr as $key => $value)
                    @if ($key == 'material_id' and $value == $material->id)
                      @selected(true) @endif
                @endforeach
            @endforeach
          @elseif (request()->query() and old('material_id'))
            @if (old('material_id') == $material->id) @selected(true) @endif
          @elseif (!request()->query() and old('material_id'))
            @if (old('material_id') == $material->id) @selected(true) @endif
            @endif>
            {{ $material->name }}</option>
            @endforeach
          </select>
          <label for="material_id">Материал</label>
        </div>

        <div>
          <select name="rotation_id" id="rotation_id">
            @foreach ($rotations as $rotation)
              <option value="{{ $rotation->id }}"
                @if (request()->query() and !old('rotation_id')) @foreach (request()->query() as $dataArr)
                  @foreach ($dataArr as $key => $value)
                    @if ($key == 'rotation_id' and $value == $rotation->id)
                      @selected(true) @endif
                @endforeach
            @endforeach
          @elseif (request()->query() and old('rotation_id'))
            @if (old('rotation_id') == $rotation->id) @selected(true) @endif
          @elseif (!request()->query() and old('rotation_id'))
            @if (old('rotation_id') == $rotation->id) @selected(true) @endif
            @endif>
            {{ $rotation->name }}</option>
            @endforeach
          </select>
          <label for="rotation_id">Ротация</label>
        </div>

        <div>
          <input type="text" name="price" id="price"
            @if (request()->query() and !old('price')) @foreach (request()->query() as $dataArr)
                @foreach ($dataArr as $key => $value)
                  @if ($key == 'price')
                    value = "{{ $value }}" @endif
            @endforeach
          @endforeach
        @else
          value = "{{ old('price') }}"
          @endif>
          <label for="price">Цена</label>
        </div>
        <div>
          @error('price')
            {{ $message }}
          @enderror
        </div>

        <div>
          <button>Далее</button>
        </div>
      </form>
    </div>
    <div>
      <button><a href="{{ route('steles.index') }}">Отменить</a></button>
    </div>
  </div>
@endsection

