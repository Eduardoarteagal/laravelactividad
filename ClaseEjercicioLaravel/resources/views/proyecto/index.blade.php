<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio en clase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>
    <div class="container">
        <h1>This are the items:</h1>
        <a href="{{ route('proyecto.create') }}" class="btn btn-success">Agregar</a>
        <ul class="list-group">
            @foreach ($proyectos as $item)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$item->name}}
                <div>
                    <a href="{{ route('proyecto.edit', $item->id) }}" class="btn btn-info me-2">Editar</a>
                    <form action="{{ route('proyecto.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</body>

</html>
