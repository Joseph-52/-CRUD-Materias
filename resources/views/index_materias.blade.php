<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <title>Registro de Materias</title>
    </head>
    <body>
        <h1> Materias Registradas </h1>
        <a href="{{ route('Datos-Materia.create') }}" class="btn btn-primary mb-3">
            Registrar Nueva Materia
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Creditos</th>
                    <th>Profesor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($DatosMateria as $renglon)
                    <tr>
                        <td>
                            <a href="{{ route('Datos-Materia.show', $renglon->id) }}">
                                {{ $renglon->id }}
                            </a>
                        </td>
                        <td>{{$renglon->nombre}}</td>
                        <td>{{$renglon->creditos}}</td>
                        <td>{{$renglon->profesor}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>