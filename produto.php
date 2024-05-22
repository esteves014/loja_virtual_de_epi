<!DOCTYPE html>

<?php
include("php/verifica_u.php");
error_reporting(0);
ini_set("display_errors", 0 );

$id = $_SESSION['usuario'];

if($id <> null){
    $query_1 = "select * from usuarios where id = '$id'";
    $resp = mysqli_query($cnx, $query_1);
    $row2 = mysqli_fetch_array($resp);
}
?>

<html lang="pt-BR">

    <head>

        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/logo esteves epi.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilo_base_css.css">
        <link rel="stylesheet" href="css/produto.css">

        <title>Inicio</title>
        <script src="js/font_awesome_free.js"></script>

    </head>

    <body>
        
    <nav>

<a href="index.php"><img src="img/logo esteves epi.png" class="logo"></a>

<div class="camp">

<div class="camp_search">

    <form action="" method="get">

        <div class="search">

            <input type="text" name="s" id="search" placeholder="Digite aqui..." style="margin-bottom: 0; border-right: 2px solid black;">

            <button type="submit" style="background-color: transparent; color: transparent; border: 0px;">

                <i class="fa-solid fa-magnifying-glass fa-2xl" style="color: black; cursor: pointer; font-size: 3.5vh; margin-left: 10px;"></i>

            </button>
    
        </div>

        </div>

    </form>

    <div class="navbar">
            
            <a href="index.php" style="margin-top: 10px;">Inicio</a>

            <div class="subnav">

                <button class="subnavbtn">Produtos <i class="fa-solid fa-angle-down"></i></button>

                <div class="subnav-content">

                    <a href="index.php" class="link_nb"><b>Inicio</b></a>

                    <a href="produtos/luvas.php" class="link_nb"><b>Luvas</b></a>

                    <a href="produtos/capacetes.php" class="link_nb"><b>Capacetes</b></a>

                    <a href="produtos/Calçados.php" class="link_nb"><b>Calçados</b></a>

                    <a href="produtos/protetores.php" class="link_nb"><b>Protetores</b></a>

                </div>

            </div>

            <a href="../Oferta do dia.php" style="margin-top: 10px;">Oferta do dia</a>

        </div>


</div>

<div class="camp_ajuda">
    
    <a href="https://wa.me/+5514991484207" target="_blank" style="display: flex;">

        <i class="fa-solid fa-headset" style="color: #000000; font-size: 5vh; margin: 5px;"></i>

        <span><h1 style="font-size: 16px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt); margin-top: 5px;">Suporte</h1><p style="font-size: 14px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt)">(14)99148-4207</p></span>

    </a>

</div>

<div class="camp_user">

    <?php if($id <> null) {
        ?> <a href="<?php if($id_adm <> 1){ ?> php/perfil.php <?php } else{ ?> painel_p.php <?php }?>"  style="display: flex;"><img src="<?php echo$row2['img'] ?>" alt="" style="width: 6vh; height: 6vh; margin-right: 8px; border-radius: 50%;">
        
        <span><h1 style="font-size: 16px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt); margin-top: 10px;"><?php echo $row2['user'] ?></h1>
        
        <p style="font-size: 14px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt)"><?php echo $row2['cidade'];?></p></span> </a><?php } ?>

</div>

<div class="camp_cart">

    <a href="logout.php" class="sair"> SAIR</a>

</div>

</nav>

        <?php

            $id_p = $_GET['id'];

            include('php/conexao.php');
            $query_1 = "Select * from produtos where id = '$id_p'";
            $resp = mysqli_query($cnx, $query_1);
            $i = mysqli_fetch_assoc($resp);
        ?>

        <div class="container">
        
            <div class="card_p">

                <img src="<?php echo$i['img'];?>" class="img_p">

                <div class="info_pd">

                    <h1 class="nome_p"><?php echo$i['nome']; ?></h1>

                    <p class="preco"> <?php echo$i['preco']; ?> </p>

                    <p><?php echo$i['info'] ?></p>

                </div>
                
            </div>

        </div>
        
    </body>

</html>