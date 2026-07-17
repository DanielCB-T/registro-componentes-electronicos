<?php 
if(!empty($_GET["id"])){
    $id = $_GET["id"];
    $sql = $conexion -> query(" DELETE FROM componentes WHERE id = $id");

    if($sql == 1){
        echo '<div class="alert alert-success">Componente eliminado correctamente.</div>';
    }else{
        echo '<div class="alert alert-danger">Error al eliminar.</div>';
    }
}
?>