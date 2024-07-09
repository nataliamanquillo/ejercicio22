<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listar Proyectos</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CRUD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('proyecto.index')}}">Listar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('proyecto.create') }}">Crear</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Cuantía</th>
            <th scope="col">Fecha_inicio</th>
            <th scope="col">Fecha_fin</th>
            <th scope="col">Descripción</th>
            <th scope="col">Clientes</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($proyectos as $proyecto)

                <tr>
                    <th scope="row">{{ $proyecto->id }}</th>
                    <td>{{ $proyecto->cuantia }}</td>
                    <td>{{ $proyecto->fecha_inicio }}</td>
                    <td>{{ $proyecto->fecha_fin }}</td>
                    <td>{{ $proyecto->descripcion }}</td>
                    <td>{{ $proyecto->cliente_id }}</td>
                  
                    {{-- <td>{{$viaje->viajero_id->viajeros->nombre }}</td> --}}
                        {{-- @foreach ($viaje->viajeros as $viajero)
                        {{$viajero->nombre}},
                        @endforeach --}}
                    {{-- <td>{{ $viaje->viajeros as $viajero}}</td>

                    $viaje->viajeros->index->nomre --}}
                    <td>
                        <button type="button" class="btn btn-info" onclick="location.href='{{route('proyecto.show', $proyecto->id)}}'">Mostrar</button>
                        <button type="button" class="btn btn-warning" onclick="location.href='{{route('proyecto.edit', $proyecto->id)}}'">Editar</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#proyecto{{$proyecto->id}}">Borrar</button>
                        <!-- Modal eliminar -->
                        <div class="modal fade" id="proyecto{{$proyecto->id}}" tabindex="-1" aria-labelledby="proyecto{{$proyecto->id}}Label" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="proyecto{{$proyecto->id}}Label">Eliminar Registro</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Seguro que quieres eliminarlo?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                                    <form action="{{route('proyecto.destroy', $proyecto->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>