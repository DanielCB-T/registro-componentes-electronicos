<?php
include "model/conexion.php";
$id = $_GET["id"];
$sql = $conexion -> query(" SELECT * FROM componentes WHERE id=$id ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    
</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
            <h4 class="text-center alert alert-secondary ">Modificar componente</h4>
            <input type="hidden" name="id" value="<?= $_GET["id"]?>">
            <?php 
            include 'controller/modificar_componente.php';
                while($datos=$sql->fetch_object()){?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ingrese el nombre del componente</label>
                    <input type="text" class="form-control" name="nombre" value="<?= $datos -> nombre?>">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ingrese el tipo</label>
                    <input type="text" class="form-control" name="tipo" value="<?= $datos -> tipo ?>">
                </div>
            
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ingrese el valor</label>
                    <input type="text" class="form-control" name="valor" value="<?= $datos -> valor?>">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Modelo</label>
                    <input type="text" class="form-control" name="modelo" value="<?= $datos -> modelo?>">
                </div>
            
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Unidades</label>
                    <input type="number" class="form-control" name="unidades" value="<?= $datos -> unidades?>">
                </div>
            <?php }
            ?>
          
           <button type="submit" class="btn btn-primary" name="btnmodificar" value="ok">Modificar</button>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>