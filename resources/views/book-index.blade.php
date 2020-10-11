@extends('layouts.main-layout')
@section('content')

  <div class="card">
    <div class="card-header">
      <div class="">
        books
      </div>
      <div>
        <label for="id_is">ID is</label>
        <input id="idis" type="checkbox" name="id_is">
      </div>
    </div>
    <div class="card-body">
      <ul id="books">
      </ul>
    </div>
  </div>

@endsection
