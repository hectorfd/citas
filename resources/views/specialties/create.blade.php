@extends('layouts.panel')

@section('content')
    <div class="card shadow">
        <div class="card-header border-0">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Nueva Especialidad</h3>
                </div>
                <div class="col text-right">
                    <a href="{{url('/especialidades')}}" class="btn btn-sm btn-success">
                        <i class="fas fa-chevron-left"></i>
                        Regresar</a>
                </div>
            </div>
        </div>
        {{-- <div class="table-responsive">
            <!-- Projects table -->
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Opciones</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">
                            /argon/
                        </th>
                        <td>
                            4,569
                        </td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary">Editar</a>
                            <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                       
                    </tr>
                </tbody>
            </table>
        </div> --}}
        <div class="card-body">
            @if ($errors ->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        <i class="fas fa-exclamation-triangle"></i>
                        <strong>Por favor!!</strong>{{$error}}
                    </div>
                @endforeach
            @else
                
            @endif
            <form action="{{url('/especialidades')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre de la Especialidad</label>
                    <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
                </div>

                <div class="form-group">
                    <label for="description">Descripción</label>
                    <input type="text" name="description" class="form-control" value="{{old('description')}}">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Crear Especialidad</button>

            </form>
        </div>
    </div>
@endsection