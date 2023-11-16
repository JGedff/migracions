@extends('master')

@section('content')
<form action="{{ url('create)}}" method='POST'>
    @csrf
    <div class="mb-3">
      <label for="aula" class="form-label">Aula</label>
      <input type="text"
        class="form-control" name="aula" id="aula" aria-describedby="aula" placeholder="">
      <small id="aula" class="form-text text-muted">aula</small>
    </div>
        <div class="mb-3">
      <label for="num_alumnes" class="form-label">Numero de alumnes</label>
      <input type="number"
        class="form-control" name="num_alumnes" id="num_alumnes" aria-describedby="num_alumnes" placeholder="">
      <small id="num_alumnes" class="form-text text-muted">num_alumnes</small>
    </div>
        <div class="mb-3">
      <label for="cicle" class="form-label">Cicle</label>
      <input type="text"
        class="form-control" name="cicle" id="cicle" aria-describedby="cicle" placeholder="">
      <small id="cicle" class="form-text text-muted">cicle</small>
    </div>
</form>
@endsection