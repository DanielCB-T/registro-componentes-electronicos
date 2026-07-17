<?php
if (!empty($_POST["btnregistro"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["tipo"]) and !empty($_POST["valor"]) and !empty($_POST["modelo"]) and !empty($_POST["unidades"])){
        $nombre = $_POST["nombre"];
        $tipo = $_POST["tipo"];
        $valor = $_POST["valor"];
        $modelo = $_POST["modelo"];
        $unidades = $_POST["unidades"];

        $sql = $conexion->query(" INSERT INTO componentes (nombre, tipo, valor, modelo, unidades) VALUES ('$nombre', '$tipo', '$valor', '$modelo', $unidades) ");
        if($sql == 1){
            echo '<div class="alert alert-success">Componente registrado correctamente.</div>';
        }
        else{
            echo '<div class="alert alert-danger">Error al registrar el componente.</div>';
        }
    }
    else{
        echo '<div class="alert alert-warning">Algunos de los campos estan vacios.</div>';
    }
}
?>