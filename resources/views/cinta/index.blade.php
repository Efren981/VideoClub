<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cintas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h4>Gestion Cintas</h4>
    <div class="row">
        <div class="col-xl-12">
            <form action="{{route('cintas.index')}}" method="get">
                <div class="form-row">
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="texto">
                    </div>
                    <div class="col-auto">
                        <input type="submit" class="btn btn-primary" value="buscar">
                    </div>
                    <div class="col-auto">
                        <a href="{{route('cintas.create')}}" class="btn btn-success">Nuevo</a>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>opciones</th>
                        <th>id_cinta</th>
                        <th>id_pelicula</th>
                        <th>codigo</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cintas as $cinta)
                    <tr>
                        <td><a href="{{route('cintas.edit',$cinta->id_cinta)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{route('cintas.destroy',$cinta->id_cinta)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Eliminar">
                        </form>
                        </td>
                        <td>{{$cinta->id_cinta}}</td>
                        <td>{{$cinta->id_pelicula}}</td>
                        <td>{{$cinta->codigo}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
