@extends('layout.stones')
@section('stones.titel')
  <title>Изменить {{ $stone->titel }}</title>
@endsection
@section('stones.body')
  <div>
    <form action="{{ route('stones.update', $stone->id) }}" method="POST">
      @csrf
      @method('patch')
      <div>
        <input type="text" name="titel" id="titel" value="{{ $stone->titel }}">
        <label for="titel">Название товара</label>
      </div>
      <div>
        <input type="text" name="description" id="description" value="{{ $stone->description }}">
        <label for="description">Описание товара</label>
      </div>
      <div>
        <button>Изменить</button>
      </div>
    </form>
  </div>
  <div>
    <button><a href="{{ route('stones.show', $stone->id) }}">Отменить</a></button>
  </div>
@endsection
