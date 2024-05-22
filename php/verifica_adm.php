<?php 

session_start();

include('conexao.php');

if(isset($_SESSION['adm'])){
    $query_1 = "select * from usuarios where adm = '1'";
    $resposta = mysqli_query($cnx, $query_1);

}else {
    header('location: ../index.php');
}

?>