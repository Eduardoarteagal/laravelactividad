<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{ route('proyecto.store') }}" method="post">
      @csrf
      @method('POST')
    <div class="col-5">
      <h1 class="display-6">Registro de proyecto</h1>
      <form action="{{ route('proyecto.store') }}" method="post">
        <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">Nombre Proyecto</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Agregar proyecto">
      <input type="text" class="form-control" id="Descripcion" name="Descripcion" placeholder="Agregar detalles">
    </br>
      <button class="btn btn-primary" type="submit">Agregar</button>
</div>
     </form>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>