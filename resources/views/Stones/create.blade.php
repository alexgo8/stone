@extends('layout.stones')
@section('stones.titel')
  <title>Добавить новый товар</title>
@endsection
@section('stones.body')
  <div>
    <div>
      <h2>Форма создания товара</h2>
    </div>
    <div>
      <form action="{{ route('stones.store') }}" method="POST">
        @csrf
        <div>
          <input type="text" name="titel" id="titel">
          <label for="titel">Название товара</label>
        </div>
        <div>
          <input type="text" name="description" id="description">
          <label for="description">Описание товара</label>
        </div>
        <div>
        <select name="category_id" id="category_id">
          @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->title }}</option>
          @endforeach
        </select>
        <label for="category_id">Категория</label>
      </div>
        <div>
          <button>Добавить</button>
        </div>
      </form>
    </div>
    <div>
      <button><a href="{{ route('stones.index') }}">Отменить</a></button>
    </div>
  </div>
@endsection
