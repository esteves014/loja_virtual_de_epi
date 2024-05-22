<?php

    include("verifica_u.php");

    $id_p = $_GET['id_p'];
    $query_1 = "delete from produtos where id = '{$id_p}'";

    if(mysqli_query($cnx, $query_1)){
        header('Location: painel_p.php');
    }

?>