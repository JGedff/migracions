@extends('master')

@section('content')
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Aula</th>
                <th scope="col">Numero de alumnes</th>
                <th scope="col">Cicle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$dades->aula}}</td>
                <td>{{$dades->num_alumnes}}</td>
                <td>{{$dades->cicle}}</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection