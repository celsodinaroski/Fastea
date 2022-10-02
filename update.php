<?php
    include "conn.php";

    $id = $_GET["id"];

    if( $id == null){
        echo "Nulo"; 
    }else {
        $query="UPDATE chas SET estado = 0 WHERE id = $id";
        $atualizar = mysqli_query($conn,$query);
    }
?>