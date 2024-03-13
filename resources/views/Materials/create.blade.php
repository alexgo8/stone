@extends('layout.materials')
@section('materials.title')
    <title>Добавить новый вид камня</title>
@endsection
@section('materials.body')
<div>
  <h2>Форма добавления нового вида камня</h2>
</div>
    <div>
      <form action="{{ route('materials.store') }}" method="post">
        @csrf
        <div>
          <input type="text" name="name" id="name">
          <label for="name">Название вида камня</label>
        </div>
        <div>
          <button>Добавить вид</button>
        </div>        
      </form>
    </div>
@endsection
