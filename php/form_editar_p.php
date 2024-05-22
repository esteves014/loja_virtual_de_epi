<?php
    include("verifica_adm.php");
    error_reporting(0);
    ini_set("display_errors", 0 );

    $id = $_SESSION['usuario'];
    $id_adm = $_SESSION['adm'];

    if($id <> null){
        $query_1 = "select * from usuarios where id = '$id'";
        $resp = mysqli_query($cnx, $query_1);
        $row2 = mysqli_fetch_array($resp);
    }
?>

<html>
    <head>
    <style>
            span{
                display: block;
            }
        </style>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="../img/logo esteves epi.png" type="image/x-icon">
        <title>Document</title>

        <link rel="stylesheet" href="../css/estilo_base_css.css">
        <link rel="stylesheet" href="../css/painel_p.css">

        <script src="../js/font_awesome_free.js"></script>
        <script src="../js/troca.js" defer></script>
        <script src="../js/image_preview.js" defer></script>
    </head>

    <body>
            <nav>

        <a href="../index.php"><img src="../img/logo esteves epi.png" class="logo"></a>

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


        </div>

        <div class="camp_ajuda">
            
            <a href="https://wa.me/+5514991484207" target="_blank" style="display: flex;">

                <i class="fa-solid fa-headset" style="color: #000000; font-size: 5vh; margin: 5px;"></i>

                <span><h1 style="font-size: 16px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt); margin-top: 5px;">Suporte</h1><p style="font-size: 14px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt)">(14)99148-4207</p></span>

            </a>

        </div>

        <div class="camp_user">

            <?php if($id <> null) {
                ?> <a href="<?php if($id_adm <> 1){ ?> php/perfil.php <?php } else{ ?> painel_p.php <?php }?>"  style="display: flex;"><img src="<?php echo "../".$row2['img'] ?>" alt="" style="width: 6vh; height: 6vh; margin-right: 8px; border-radius: 50%;">
                
                <span><h1 style="font-size: 16px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt); margin-top: 10px;"><?php echo $row2['user'] ?></h1>
                
                <p style="font-size: 14px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt)"><?php echo $row2['cidade'];?></p></span> </a><?php } ?>

        </div>

        <div class="camp_cart">

            <a href="logout.php" class="sair"> SAIR</a>

        </div>

        </nav>

        <?php
            $id_p = $_GET['id_p'];
            $id = $_SESSION['usuario'];
            $query_1 = "select * from produtos where id = '{$id_p}'";
            $resposta = mysqli_query($cnx, $query_1);
    
            $row = mysqli_fetch_assoc($resposta);
        ?>

        <form action="" method="post" enctype="multipart/form-data">

        <div id="capacetes" style="display: block; margin: auto; width: 25vw; height: max-content; border: 1px solid black; flex-wrap: wrap; padding: 10px;">

            <div class="center" style="display: block; margin: auto; width: max-content; height: max-content">

                <form action="" method="post" enctype="multipart/form-data">

                <h1 style="font-size: 30px;">Edite o Produto</h1>

                <select name="categoria" id="tipo">
                    <option value="luva">Luvas</option>
                    <option value="capacete">Capacetes</option>
                    <option value="roupa">Roupas</option>
                    <option value="botina">Botinas e Calçados</option>
                    <option value="oculos">Óculos</option>
                    <option value="altura">Trabalho em Altura</option>
                    <option value="respiracao">Proteção Respiratoria</option>
                    <option value="auditiva">Proteção Auditiva</option>
                </select>

                    <span><label style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Nome</label></span>
                    <span><input type="text" class="inp_form" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" name="nome_1" value="<?php echo$row['nome']?>"></span>

                    <span><label style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Marca</label></span>
                    <span><input type="text" class="inp_form" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" name="marca" value="<?php echo$row['marca']?>"></span>

                    <span><label style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Tamanho</label></span>
                    <span><input type="text" class="inp_form" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" name="tmh" value="<?php echo$row['tamanho']?>"></span>

                    <span><label style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Informações</label></span>
                    <span><textarea name="info" style="width: 21vw; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" id="" cols="30" rows="10"><?php echo$row['info']?></textarea></span>

                    <span><label style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Preço</label></span>
                    <span><input type="number" class="inp_form" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" name="preco" value="<?php echo$row['preco']?>"></span>

                    <span><label style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Quantidade</label></span>
                    <span><input type="number" class="inp_form" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" name="quant" value="<?php echo$row['quant']?>"></span>


                        <label class="picture" for="picture__input" tabIndex="0" style="margin-top: 10px">
                            <span class="picture__image"></span>
                        </label>

                        <input type="file" name="picture__input" id="picture__input">

                    <div class="center">

                    <span><input type="submit" class="inp_form" value="Cadastar" style="height: 2vw; cursor:pointer;"></span>

                    </div>

                    </form>

            </div>

        </div>

            <a href="painel_p.php">Voltar</a>

    </body>
</html>

<?php

    $nome = $_POST['nome_1'];
    $marca = $_POST['marca'];
    $info = $_POST['info'];
    $preco = $_POST['preco'];
    $img = $_FILES['picture__input'];
    $quant = $_POST['quant'];
    $tmh = $_POST['tmh'];
    $categoria = $_POST['categoria'];

    $id = $_GET['id_p'];

        $tamanho = $img['size'] * 0.001;
        $novo_nome_foto = uniqid();
        $pasta = "upload/produtos/";
        $ext = strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));
        $caminho = $pasta . $novo_nome_foto . "." . $ext;
    
        if($ext == "jpg" || $ext == "jpeg" || $ext == "png" || $ext == "gif" || $ext == "jfif"){

            if($tamanho <= 4032){

                $move = move_uploaded_file($img['tmp_name'], "../".$caminho);
    
            }if($move){
                $query_2 = "UPDATE `produtos` SET `nome`='$nome',`marca`='$marca',`tamanho`='$tmh',`categoria`='$categoria',`info`='$info',`preco`='$preco',`img`='$caminho',`quant`='$quant' WHERE id = '$id'";
                $resp = mysqli_query($cnx, $query_2);
                echo"<script> alert('Produto cadastrado com sucesso')</script>";                    
                echo"<meta http-equiv='refresh' content='1'>";   
                
            }
        }
?>