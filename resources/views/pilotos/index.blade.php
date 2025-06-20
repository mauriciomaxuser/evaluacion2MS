@extends('layout.app')

@section('contenido')
    <h1>Listado de clientes</h1>
    <div class="d-flex gap-2 mb-3">
        <a href="" class="btn btn-success">Agregar Nuevo Cliente</a>
    </div>

    <table  class="table table-bordered 
     table-striped table-hover">
        <thead>
            <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Latitud1</th>
                <th>Longitud1</th>
                <th>Hora1</th>

                <th>Latitud2</th>
                <th>Longitud2</th>
                <th>Hora2</th>
                <th>Latitud3</th>
                <th>Longitud3</th>
                <th>Hora3</th>


                <th>OPCIONES</th>

            </tr>
        </thead>
        <tbody>
            @foreach($pilotos as $pilotoTemporal)
                <tr>
                    <td>{{ $pilotoTemporal->cedula }}</td>
                    <td>{{ $pilotoTemporal->nombre }}</td>
                    <td>{{ $pilotoTemporal->latitud1}}</td>
                    <td>{{ $pilotoTemporal->longitud1}}</td>
                    <td>{{ $pilotoTemporal->hora1}}</td>
                    

                    <td>{{ $pilotoTemporal->latitud2}}</td>
                    <td>{{ $pilotoTemporal->longitud2}}</td>
                    <td>{{ $pilotoTemporal->hora2}}</td>

                    <td>{{ $pilotoTemporal->latitud3}}</td>
                    <td>{{ $pilotoTemporal->longitud3}}</td>
                    <td>{{ $pilotoTemporal->hora3}}</td>
                   <td>
                        <a href=" " class="btn btn-warning btn-sm" title="Editar">
                            <i class="fa fa-pen"></i>
                        </a>

                        <form action="" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Estás seguro de eliminar este cliente?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Eliminar" type="submit">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>

                    
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
