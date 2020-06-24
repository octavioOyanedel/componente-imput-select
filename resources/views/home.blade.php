@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('flaites.create') }}">Agregar</a>
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Provincia</th>
                            <th>Comuna</th>
                            <th>Cerro/Población/Villa</th>
                            <th>Ver</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($flaites as $f)
                                <tr>
                                    <td>{{ $f->nombre }}</td>
                                    <td>{{ $f->provincia->nombre }}</td>
                                    <td>{{ $f->comuna->nombre }}</td>
                                    <td>{{ $f->cerro->nombre }}</td>
                                    <td><a href="">Ver</a></td>
                                    <td><a href="">Editar</a></td>
                                    <td><a href="">Eliminar</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
