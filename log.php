<?php

error_reporting(0);
ini_set("display_errors", 0 );
include("php/conexao.php");
ob_start();
session_start();

$id = $_SESSION['usuario'];
$adm = $_SESSION['adm'];

if($id <> null && $adm == 1){
    header('Location: php/painel_p.php');
}else if($id <> null){
    header('Location: php/logout.php');
    // header('Location: php/perfil.php');
}

?>

<html>
    <head>

        <meta charset="UTF-8">

        <link rel="shortcut icon" href="img/logo esteves epi.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="css/estilo_base_css.css">
        <link rel="stylesheet" href="css/card_p.css">

        <script src="js/script.js" defer></script>
        <script src="js/slide_show.js" defer></script>
        <script src="js/jquery-3.7.0.js" defer></script>
        <script src="js/jquery.mask.js" defer></script>
        <script src="js/mask.js" defer></script>
        <script src="js/via-cep.js" defer></script>
        <script src="js/image_preview.js" defer></script>

        <link rel="stylesheet" href="css/log.css">

        <title>Login</title>
        <script src="js/font_awesome_free.js" crossorigin="anonymous"></script>

    </head>

    <body>
    <!-- <div class="camp_info_nav">
    <div class="camp_info">

    <a href="" class="infonav"><i class="fa-solid fa-tag" style="color: red;"></i> PROMOÇÕES</a>

    <a href="" class="infonav"><i class="fa-regular fa-building" style="color: red;"></i> TODAS AS MARCAS</a>

    <a href="" class="infonav"><i class="fa-solid fa-circle-question" style="color: red;"></i> DÚVIDAS</a>

    <a href="" class="infonav"><i class="fa-solid fa-store" style="color: red;"></i> VEJA A LOJA TODA</a>

    <a href="" class="infonav"><i class="fa-solid fa-truck-fast" style="color: red;"></i> FRETES</a>

    </div>
    </div> -->

    <nav>

        <a href="index.php"><img src="img/logo esteves epi.png" class="logo"></a>

        <div class="camp">

        <div class="camp_search">

            <form action="php/pesquisa.php" method="get">

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

            <a href="log.php" style="display: flex;">

                 <i class="fa-solid fa-circle-user" style="color: #000000; font-size: 5vh; margin: 5px;"></i>
                
                <span><h1 style="font-size: 16px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt); margin-top: 5px;">Olá visitante!</h1>
                
                <p style="font-size: 14px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt)">Faça seu Login aqui!</p></span>

            </a>

        </div>

        <!-- <div class="camp_cart">

            <a href="php/carrinho.php" style="display: flex;">

            <i class="fa-solid fa-cart-shopping" style="color: #000000; font-size: 5vh; margin: 5px;"></i>

            <span><h1 style="font-size: 16px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt); margin-top: 5px;">Itens: 0</h1>
                    
            <p style="font-size: 14px; font-family: 'Open Sans', sans-serif; text-decoration: none; color: var(--color_txt)">R$ 0,00</p></span>

            </a>

        </div> -->


    </nav>

        </div>

        <div vw class="enabled">

        <div vw-access-button class="active"></div>

        <div vw-plugin-wrapper>

            <div class="vw-plugin-top-wrapper"></div>

        </div>

        </div>

        <script src="js/vlibras-plugin.js"></script>

        <script defer>

            new window.VLibras.Widget('https://vlibras.gov.br/app');

        </script>

        <div class="form">

            <div class="log">

                <h1 class="tt_log">Já possui cadastro?</h1>

                <div class="center">

                <form action="" method="POST">

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Email</label></span>
                    <span><input type="text" required name="user" placeholder="exemplo@gmail.com"></span>

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Senha</label></span>
                    <span><input type="password" required name="password" class="" placeholder="senha"></span>

                    <span><input type="submit" value="Entar" class="btt"></span>

                </form>

                <?php

                    

                ?>

            </div>

        </div>

            <div class="cad">

                <h1 class="tt_log">Não possui cadastro?</h1>

                <div class="center">

                <form action="" method="POST" enctype="multipart/form-data">

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Nome</label></span>
                    <span><input type="text" maxlength="100" required name="nome" placeholder="nome"></span>

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Email</label></span>
                    <span><input type="Email" maxlength="50" required name="email" placeholder="exemplo@gmail.com"></span>

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Senha</label></span>
                    <span><input type="password" maxlength="12" required name="senha" placeholder="senha"></span>

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Escolha uma foto de perfil</label></span>

                    <div class="center" style="display: flex; justify-content: center; margin-top: 10px;">

                        <label class="picture" for="picture__input" tabIndex="0">
                            <span class="picture__image"></span>
                        </label>

                        <input type="file" name="picture__input" id="picture__input">

                    </div>

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Telefone(Ex: DDD + Telefone)</label></span>
                    <span><input type="text" name="tel" id="tel" placeholder="(xx) xxxxx-xxxx" required></span>

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">CEP</label></span>
                    <span><input type="text" name="cep" id="cep" placeholder="CEP">

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Endereço</label></span>
                    <span><input type="text" maxlength="100" required name="rua" id="endereco" placeholder="Rua/Avenida"></span>

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Número</label></span>
                    <span><input type="text" required name="numero" placeholder="Número da casa"></span>

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Cidade</label></span>
                    <span><input type="text" maxlength="50" required name="cidade" placeholder="Cidade" id="city"></span>

                    <span><label style="font-size: 20px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Bairro</label></span>
                    <span><input type="text" maxlength="50" required name="bairro" id="bairro" placeholder="Bairro"></span>

                    <span><input type="submit" value="Cadastrar" class="btt" style="color: black; background-color: red; margin-bottom: 25px"></span>

                </form>

                </div>

            </div>

        </div>

    </body>

</html>

<?php

    

    $user = $_POST['user'];
    $pass = $_POST['password'];

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $foto = $_FILES['picture__input'];
    $tel = $_POST['tel'];
    $cpf = $_POST['cpf'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];

    if($user <> null && $pass <> null){
        $query_2 = "select * from usuarios where email = '$user' and senha = '$pass'";
        $resposta = mysqli_query($cnx,$query_2);
        $row = mysqli_fetch_assoc($resposta);

        if($user == $row['email'] && $pass == $row['senha']) {
            $_SESSION['usuario'] = $row['id'];
            $_SESSION['adm'] = $row['adm'];

            header('Location: index.php');
            ob_end_flush();
            
        }else if($user == $row['email'] && $pass <> $row['senha']) {
            echo"<script> alert('Senha incorreta!') </script>";

        }else if($user <> $row["email"]){
            echo"<script> alert('Ususario incorreto!') </script>";
        }
    }else if($nome <> null && $email <> null && $senha <> null){
        $query_3 = "select * from usuarios where email = '$email'";
        $resposta = mysqli_query($cnx,$query_3);
        $row2 = mysqli_fetch_assoc($resposta);

        if($email == $row2['email'] && $cpf == $row2['cpf']){
            echo"<script> alert('Usuário já existente tente novamente!') </script>";
        }else if($email <> $row2['email'] && $cpf <> $row2['cpf']) {
            $tamanho = $foto['size'] * 0.001;
            $novo_nome_foto = uniqid();
            $pasta = "upload/user/";
            $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
            $caminho = $pasta . $novo_nome_foto . "." . $extensao;

            if($extensao == "jpg" || $extensao == "jpeg" || $extensao == "png" || $extensao == "gif"){
                if($tamanho <= 4032){
                    $move = move_uploaded_file($foto['tmp_name'], $caminho);

                    if($move){
                        $query_2 = "INSERT INTO `usuarios`(`user`, `senha`, `email`, `telefone`, `cpf`, `rua`, `numero_endereço`, `bairro`, `cidade`, `cep`, `img`) VALUES ('$nome','$senha','$email','$tel','$cpf','$rua','$numero','$bairro','$cidade','$cep','$caminho')";
                        $res = mysqli_query($cnx, $query_2);
                        $query_3 = "select * from usuarios where email = '$email'";
                        $resposta = mysqli_query($cnx,$query_3);
                        $row10 = mysqli_fetch_assoc($resposta);
                        $_SESSION['usuario'] = $row10['id'];
                        $_SESSION['adm'] = $row10['adm'];
                        // $row3 = mysqli_num_rows($res);
                        header('Location: index.php');

                        // if($row3 > 0){
                        //     $query_1 = "select * from usuarios where email = '$email'";
                        //     $resposta = mysqli_query($cnx,$query_1);
                        //     $row = mysqli_fetch_assoc($resposta);
                            

                            // if($email == $row['email'] && $senha == $row['senha']) {
                            //     $_SESSION['usuario'] = $row['id'];
                            //     header('location: index.php');
                            // }else{
                            //     echo"<script> alert('Erro no auto login tente novamente!') </script>";
                            // }
                            
                        }
                    }
                }
            }
        }      
    
?>