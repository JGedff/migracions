@extends('master')

@section('content')
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Marca</th>
                <th scope="col">Model</th>
                <th scope="col">Color</th>
            </tr>
        </thead>
        <tbody>
            @forelse($cotxes as $cotxe)
                <tr>
                    <td>{{$cotxe->marca}}</td>
                    <td>{{$cotxe->model}}</td>
                    <td>{{$cotxe->color}}</td>
                </tr>
            @empty
                <p>No dades</p>
            @endforelse
        </tbody>
    </table>
</div>

@endsection