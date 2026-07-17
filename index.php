<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD en php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e05849730a.js" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center p-5">Componentes electrónicos</h1>
    <div class="container-fluid row">
        <form class="col-4 p-3">
            <h3 class="text-center text-secondary ">Registro del componente</h3>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese el nombre del componente</label>
                <input type="text" class="form-control" id="nombre" >
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese el tipo</label>
                <input type="text" class="form-control" id="tipo">
            </div>
          
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese el valor</label>
                <input type="text" class="form-control" id="capacidad">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo">
            </div>
          
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Cantidad</label>
                <input type="number" class="form-control" id="cantidad">
            </div>
          
           <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Enviar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">DNI</th>
                        <th scope="col">Fecha de nacimiento</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Accion</th>
                        </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="" class="btn btn-small btn-warning p-1"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" class="btn btn-small btn-danger p-1"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>