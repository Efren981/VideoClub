<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <<title>Peliculas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h4>Nueva Pelicula</h4>
    <div class="row">
        <div class="col-xl-12">
            <form action="{{route('peliculas.store')}}" method="post">
               @csrf
                <div class="form-group">
                   <label for="id_pelicula">id_pelicula</label>
                   <input type="text" class="form-control" name="id_pelicula" required maxlength="50">
               </div>
                <div class="form-group">
                    <label for="titulo">titulo</label>
                    <input type="text" class="form-control" name="titulo" required maxlength="50">
                </div>

                <div class="for-group">
                    <input type="submit" class="btn btn-primary" value="guardar">
                    <input type="reset" class="btn btn-default" value="cancelar">
                    <a href="javascript:history.back()">ir al listado</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
