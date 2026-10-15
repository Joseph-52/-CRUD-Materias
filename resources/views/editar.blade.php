<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Edicion de Materia</title>
</head>
<body>
	<h1>Edicion de Materia :)</h1>
    <a href="{{route('Datos-Materia.index')}}" class="btn btn-primary mb-3">
        Regresar al registro
    </a>
    <form action="{{route('Datos-Materia.update', $datosMateria)}}" method="POST">
        @csrf
        @method('PATCH')
        <div clas="mb-3">
            <label for="nombre" class="form-label">
                Nombre:
            <input type="text" class="form-control" 
            id="nombre" name="nombre" value="{{$datosMateria->nombre}}">
            </label>
        </div>
        <div clas="mb-3">
            <label for="creditos" class="form-label">
                Nombre:
            <input type="text" class="form-control" 
            id="creditos" name="creditos" value="{{$datosMateria->creditos}}">
            </label>
        </div>
        <div clas="mb-3">
            <label for="profesor" class="form-label">
                Nombre:
            <input type="text" class="form-control" 
            id="profesor" name="profesor" value="{{$datosMateria->profesor}}">
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
            crossorigin="anonymous"></script>
</body>
</html>
