<?php 

session_start();

include('conexao.php');

if(isset($_SESSION['usuario'])){
    $id = $_SESSION['usuario'];
    $query_1 = "select * from usuarios where id = '$id'";
    $resposta = mysqli_query($cnx, $query_1);

    $row = mysqli_fetch_assoc($resposta);

}else {
    header('location: ../index.php');
}

?>