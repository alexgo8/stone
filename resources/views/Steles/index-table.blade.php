@extends('layout.steles')
@section('steles.title')
  <title>Каталог стел таблица</title>
@endsection
@section('steles.body')
  <div>
    <form action="{{ route('steles-table.update') }}" method="post">
      @csrf
      @method('patch')
      @php
        $count = -1;
      @endphp
      @foreach ($steles as $stele)
        <div>
          @php
            $flag = true;
            $count = $count + 1;
            $arrKeysInErrorFormat = null;
          @endphp
          @foreach ($stele->getAttributes() as $key => $item)
            @if ($key == 'id')
              <input type="text" name="id[]" value="{{ $item }}" hidden>
            @endif
            @if ($key == 'size')
              <input type="text" name="size[]" value="{{ $item }}" readonly>
            @endif
            @if ($key == 'price')
              <input type="text" name="price[]"
                @if ($errors->any()) @foreach (old('price') as $keyOld => $itemOld)
                      @if ($keyOld == $count)
                        value="{{ $itemOld }}" @endif
                @endforeach
            @else
              value="{{ $item }}"
            @endif>
          @endif
          @if ($key == 'material_id')
            <select name="material_id[]">
              @foreach ($materials as $material)
                <option value="{{ $material->id }}"
                  @if ($errors->any()) @foreach (old('material_id') as $keyOld => $itemOld)
                    @if ($keyOld == $count)
                      @if ($material->id == $itemOld)
                       @selected(true) @endif
                  @endif
              @endforeach
            @elseif (!$errors->any())
              @if ($material->id == $item) @selected(true) @endif
          @endif>
          {{ $material->name }}
          </option>
      @endforeach
      </select>
      @endif
      @if ($key == 'rotation_id')
        <select name="rotation_id[]">
          @foreach ($rotations as $rotation)
            <option value="{{ $rotation->id }}"
              @if ($errors->any()) @foreach (old('rotation_id') as $keyOld => $itemOld)
                    @if ($keyOld == $count)
                      @if ($rotation->id == $itemOld)
                       @selected(true) @endif
              @endif
          @endforeach
        @elseif (!$errors->any())
          @if ($rotation->id == $item) @selected(true) @endif
      @endif>
      {{ $rotation->name }}
      </option>
      @endforeach
      </select>
      @endif
      @if ($key == 'size_height')
        <input type="text" name="size_height[]"
          @if ($errors->any()) @foreach (old('size_height') as $keyOld => $itemOld)
                      @if ($keyOld == $count)
                        value="{{ $itemOld }}" @endif
          @endforeach
      @else
        value="{{ $item }}"
      @endif>
      @endif
      @if ($key == 'size_width')
        <input type="text" name="size_width[]"
          @if ($errors->any()) @foreach (old('size_width') as $keyOld => $itemOld)
              @if ($keyOld == $count)
                value="{{ $itemOld }}" @endif
          @endforeach
      @else
        value="{{ $item }}"
      @endif>
      @endif
      @if ($key == 'size_thickness')
        <input type="text" name="size_thickness[]"
          @if ($errors->any()) @foreach (old('size_thickness') as $keyOld => $itemOld)
              @if ($keyOld == $count)
                value="{{ $itemOld }}" @endif
          @endforeach
      @else
        value="{{ $item }}"
      @endif>
      @endif
      @php
        $arrKeysInErrorFormat[] = $key . '.' . $count;
      @endphp
      @endforeach
  </div>
  @foreach ($arrKeysInErrorFormat as $fieldKey)
    @if ($errors->any())
      @foreach ($errors->messages() as $key => $error)
        @if ($key == $fieldKey)
          @foreach ($error as $item)
            <div>{{ $item }}</div>
          @endforeach
        @endif
      @endforeach
    @endif
  @endforeach
  @endforeach
  <button>Изменить</button>
  </form>
  </div>
@endsection
