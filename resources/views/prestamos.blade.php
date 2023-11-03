<!doctype html>
<html lang="en">

<head>
  <title>Préstamos</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="/css/style.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ '/' }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ 'libros' }}">Libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ 'usuarios' }}">Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ 'prestamos' }}">Préstamos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ 'categorias' }}">Categorías</a>
                </li>
              </ul>
            </div>
            <div class="ml-auto d-flex" id="nav-right">
              
            </div>
        </div>
    </nav>
  </header>
  <main>
    <div class="container mt-4">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#agregarForm">
            Agregar prestamo
        </button>
        <div class="collapse mt-3" id="agregarForm">
            <form method="post" enctype="multipart/form-data" action="/store">
            @csrf
                <div class="form-group">
                    <label for="nombre">Libro prestado</label>
                    <input name="nombre" type="text" class="form-control editable-field" id="nombre">
                </div>
                <div class="form-group">
                    <label for="autor">Usuario</label>
                    <input name="autor" type="text" class="form-control editable-field" id="autor">
                </div>
                <div class="form-group">
                    <label for="anio">Fecha de préstamo</label>
                    <input name="anio" type="text" class="form-control editable-field" id="anio">
                </div>
                <div class="form-group">
                    <label for="editorial">Fecha de devolución</label>
                    <input name="editorial" type="text" class="form-control editable-field" id="editorial">
                </div>
                <br>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
    <div class="container mt-4">
      <table class="table table-stripped">
          <thead>
              <tr>
                  <th>Id</th>
                  <th>Libro</th>
                  <th>Usuario</th>
                  <th>Fecha inicio</th>
                  <th>Fecha fin</th>
                  <th>Editar</th>
              </tr>
          </thead>
          <tbody>
            
            @csrf
              <tr class="fila-color1 " data-id="1">
                <!-- foreach -->
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td> 
                    <!-- td para Editar y Borrar -->

              </tr>
          </tbody>
      </table>
    </div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>