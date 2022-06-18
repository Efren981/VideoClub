@extends('layouts.app')

@section("actor")
    active
@endsection
@section("content")
    <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <div class="card card">
        <form action="{{route('actores.index')}}" method="get">

            <div class="form-group">
                <p>
                    <label>Entre su Nombre:</label> <br>
                    <input id="nombre" class="form-control" type="text" placeholder="Nombre..."><br>
                </p>
                <p>
                    <label>Entre su Apellido:</label> <br>
                    <input id="apellido" class="form-control" type="text" placeholder="Apellido..."><br>
                </p>
                <button id="adicionar" class="btn btn-success" type="button">Adicionar a la tabla</button>
            </div>
        </form>

        <p>Elementos en la Tabla:
        <div id="adicionados"></div>
        </p>
        <table  id="mytable" class="table table-bordered table-hover ">
            <tr>
                <th>Nobmre</th>
                <th>Apellidos</th>
                <th>Eliminar</th>

            </tr>
        </table>

        <script>
            $(document).ready(function() {
                $('#adicionar').click(function() {
                    var nombre = document.getElementById("nombre").value;
                    var apellido = document.getElementById("apellido").value;
                    var i = 1;
                    var fila = '<tr id="row' + i + '"><td>' + nombre + '</td><td>' + apellido + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</button></td></tr>';

                    i++;

                    $('#mytable tr:first').after(fila);
                    $("#adicionados").text("");
                    var nFilas = $("#mytable tr").length;
                    $("#adicionados").append(nFilas - 1);
                    //le resto 1 para no contar la fila del header
                    document.getElementById("apellido").value ="";
                    document.getElementById("nombre").value = "";
                    document.getElementById("nombre").focus();
                });
                $(document).on('click', '.btn_remove', function() {
                    var button_id = $(this).attr("id");
                    $('#row' + button_id + '').remove();
                    $("#adicionados").text("");
                    var nFilas = $("#mytable tr").length;
                    $("#adicionados").append(nFilas - 1);
                });
            });
        </script>

    </div>
    </body>

@endsection
