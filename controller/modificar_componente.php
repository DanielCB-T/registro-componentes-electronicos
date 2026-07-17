<?php 

if(!empty($_POST["btnmodificar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["tipo"]) and !empty($_POST["valor"]) and !empty($_POST["modelo"]) and !empty($_POST["unidades"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $modelo = $_POST["modelo"];
        $valor = $_POST["valor"];
        $unidades = $_POST["unidades"];

        $sql = $conexion->query(" UPDATE componentes SET nombre = '$nombre', tipo = '$tipo', modelo='$modelo', valor = '$valor', unidades = $unidades WHERE id=$id");
        if($sql == 1){
            header("location:index.php");
        }else {
            echo '<div class="alert alert-danger">Error al modificar el componente.</div>';
        }
    
        } else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }
}

?>