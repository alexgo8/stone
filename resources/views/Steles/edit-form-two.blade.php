@extends('layout.steles')
@section('steles.title')
  <title>Изменение стелы шаг второй</title>
@endsection
@section('steles.body')
  <div>
    <div>
      <h2>Изменение стелы {{ $stele['size'] }}</h2>
    </div>
    <div>      
      <form action="{{ route('steles.update', $stele['id']) }}" method="post">
        @method('patch')
        @csrf

        <div>
          <input type="text" name="size_height" id="size_height" value="{{ $stele['size_height'] }}" @readonly(true)>
          <label for="size_height">Высота в см</label>
        </div>

        <div>
          <input type="text" name="size_width" id="size_width" value="{{ $stele['size_width'] }}" @readonly(true)>
          <label for="size_width">Ширина в см</label>
        </div>

        <div>
          <input type="text" name="size_thickness" id="size_thickness" value="{{ $stele['size_thickness'] }}"
            @readonly(true)>
          <label for="size_thickness">Толщина в см</label>
        </div>

        <div>
          <input type="text" name="size" id="size" value="{{ $stele['size'] }}" @readonly(true)>
          <label for="size">Размер</label>
        </div>

        <div>
          <input type="text" name="material_id" id="material_id"
            @foreach ($materials as $material)
            @if ($material->id == $stele['material_id'])
              value = "{{ $material->id }}"    
            @endif @endforeach
            @readonly(true) hidden>
        </div>

        <div>
          <input type="text" name="material" id="material"
            @foreach ($materials as $material)
            @if ($material->id == $stele['material_id'])
              value = "{{ $material->name }}"    
            @endif @endforeach
            @readonly(true)>
          <label for="material">Материал</label>
        </div>

        <div>
          <input type="text" name="rotation_id" id="rotation_id"
            @foreach ($rotations as $rotation)
            @if ($rotation->id == $stele['rotation_id'])
              value = "{{ $rotation->id }}"    
            @endif @endforeach
            @readonly(true) hidden>
        </div>

        <div>
          <input type="text" name="rotation" id="rotation"
            @foreach ($rotations as $rotation)
            @if ($rotation->id == $stele['rotation_id'])
              value = "{{ $rotation->name }}"    
            @endif @endforeach
            @readonly(true)>
          <label for="rotation">Ротация</label>
        </div>

        <div>
          <input type="text" name="price" id="price" value="{{ $stele['price'] }}" @readonly(true)>
          <label for="price">Цена</label>
        </div>

        <div>
          <h2>Отметьте нужные основания</h2>
        </div>

        @foreach ($bases as $base)
          @php
            $arrBasesForCurrentStele = [];
          @endphp
          @if ($base->material_id == $stele['material_id'] and $base->rotation_id == $stele['rotation_id'])
            @foreach ($base->steles as $steleBase)
              @if ($steleBase->pivot->stele_id == $stele['id'])
                @php
                  $arrBasesForCurrentStele[] = $steleBase->pivot->base_id;
                @endphp
              @endif
            @endforeach
            <div>
              
              <input type="checkbox" name="checkboxBase[{{ $base->id }}][]" id="{{ $base->id }}"
                @if (old('checkboxBase')) @if (array_key_exists($base->id, old('checkboxBase')))
                @checked(true) @endif
                @endif
              @if (in_array($base->id, $arrBasesForCurrentStele) and !(old('checkboxBase')) and !($errors->has('checkboxBase'))) @checked(true) @endif>
              <label for="{{ $base->id }}">{{ $base->size }}</label>
            </div>
          @endif
        @endforeach
        @error('checkboxBase')
          <h3>{{ $message }}</h3>
        @enderror

        <div>
          <h2>Отметьте стоимость установки стелы</h2>
        </div>
        @foreach ($installations as $installation)
          @if ($installation['material_id'] == $stele['material_id'])
            <div>
              <input type="radio" id="{{ $installation['size'] }}" name="installation_id"
                value="{{ $installation['id'] }}"
                @if (old('installation_id') == $installation['id']) @checked(true) @endif @if (!(old('installation_id')) and $stele['installation_id'] == $installation['id']) @checked(true) @endif/>
              <label
                for="{{ $installation['size'] }}">{{ $installation['size'] . '  цена ' . $installation['price'] . ' рублей' }}</label>
            </div>
          @endif
        @endforeach
        @error('installation_id')
          <h3>{{ $message }}</h3>
        @enderror

        <div>
          <h2>Отметьте стоимость гравировки имени</h2>
        </div>
        @foreach ($names as $name)
          @if ($name['material_id'] == $stele['material_id'])
            <div>
              <input type="radio" id="{{ $name['size'] }}" name="name_id" value="{{ $name['id'] }}"
                @if (old('name_id') == $name['id']) @checked(true) @endif @if (!(old('name_id')) and $stele['name_id'] == $name['id']) @checked(true) @endif />
              <label for="{{ $name['size'] }}">{{ $name['size'] . '  цена ' . $name['price'] . ' рублей' }}</label>
            </div>
          @endif
        @endforeach
        @error('name_id')
          <h3>{{ $message }}</h3>
        @enderror

        <div>
          <h2>Отметьте стоимость гравировки портрета</h2>
        </div>
        @foreach ($portraits as $portrait)
          @if ($portrait['material_id'] == $stele['material_id'])
            <div>
              <input type="radio" id="{{ $portrait['size'] }}" name="portrait_id" value="{{ $portrait['id'] }}"
                @if (old('portrait_id') == $portrait['id']) @checked(true) @endif @if (!(old('portrait_id')) and $stele['portrait_id'] == $portrait['id']) @checked(true) @endif/>
              <label
                for="{{ $portrait['size'] }}">{{ $portrait['size'] . '  цена ' . $portrait['price'] . ' рублей' }}</label>
            </div>
          @endif
        @endforeach
        @error('portrait_id')
          <h3>{{ $message }}</h3>
        @enderror

        <div>
          <button>Изменить</button>
        </div>
      </form>
    </div>

    <div>
      <button><a href="{{ route('steles.edit', $stele['id']) }}">Назад</a></button>
    </div>

    <div>
      <button><a href="{{ route('steles.index') }}">Отменить создание стеллы</a></button>
    </div>
  </div>
@endsection
