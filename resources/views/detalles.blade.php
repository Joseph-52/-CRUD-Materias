<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<title>Detalles</title>
</head>
<body>
	<h1>Informacion Detallada</h1>
        <a href="{{route('Datos-Materia.index')}}" class="btn btn-primary mb-3">
            Regresar al registro</a>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class= "card-title">Nombre: {{$datosMateria->nombre}}</h5>
                <p class="card-text">Creditos: {{$datosMateria->creditos}}</p>
                <p class="card-text">Profesor: {{$datosMateria->profesor}}</p>
            </div>
        </div>
    </div>
    <hr>
    <a href="{{ route('Datos-Materia.edit', $datosMateria)}}" class="btn btn-warning">
        Editar Materia
    </a>
    <form action="{{ route('Datos-Materia.destroy', $datosMateria) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class= "btn btn-danger">
            Borrar Materia
        </button>
    </form>
</body>
</html>
