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
        <form class="col-4 p-3" method="POST">
            <h4 class="text-center alert alert-secondary ">Registro del componente</h4>
            <?php 
                include "model/conexion.php";
                include "controller/registro_componentes.php";
            ?>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese el nombre del componente</label>
                <input type="text" class="form-control" name="nombre" >
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese el tipo</label>
                <input type="text" class="form-control" name="tipo">
            </div>
          
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ingrese el valor</label>
                <input type="text" class="form-control" name="valor">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Modelo</label>
                <input type="text" class="form-control" name="modelo">
            </div>
          
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Unidades</label>
                <input type="number" class="form-control" name="unidades">
            </div>
          
           <button type="submit" class="btn btn-primary" name="btnregistro" value="ok">Registrar</button>
        </form>

        <div class="col-8 p-4">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Unidades</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "model/conexion.php";
                        $sql=$conexion->query("SELECT * FROM componentes ");
                        while($datos=$sql->fetch_object()){?>
                    <tr>
                        <td><?= $datos -> id ?></td>
                        <td><?= $datos -> nombre ?></td>
                        <td><?= $datos -> tipo ?></td>
                        <td><?= $datos -> valor ?></td>
                        <td><?= $datos -> modelo ?></td>
                        <td><?= $datos -> unidades ?></td>
                        <td>
                            <a href="modificar_componente.php?id=<?= $datos -> id ?>" class="btn btn-small btn-warning p-1"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="" class="btn btn-small btn-danger p-1"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>