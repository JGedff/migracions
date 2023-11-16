@extends('master')

@section('content')
<form action="{{ url('classe',$dades->id)}}" method='POST'>
    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="aula" class="form-label">Aula</label>
      <input type="text"
        class="form-control" name="aula" id="aula" aria-describedby="aula" placeholder="{{$dades->aula}}">
      <small id="aula" class="form-text text-muted">aula</small>
    </div>
        <div class="mb-3">
      <label for="num_alumnes" class="form-label">Numero de alumnes</label>
      <input type="number"
        class="form-control" name="num_alumnes" id="num_alumnes" aria-describedby="num_alumnes" placeholder="{{$dades->num_alumnes}}">
      <small id="num_alumnes" class="form-text text-muted">num_alumnes</small>
    </div>
        <div class="mb-3">
      <label for="cicle" class="form-label">Cicle</label>
      <input type="text"
        class="form-control" name="cicle" id="cicle" aria-describedby="cicle" placeholder="{{$dades->cicle}}">
      <small id="cicle" class="form-text text-muted">cicle</small>
    </div>
</form>
@endsection