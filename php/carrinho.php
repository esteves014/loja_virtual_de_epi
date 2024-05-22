<!DOCTYPE html>

<html lang="pt-BR">

    <head>

        <meta charset="UTF-8">
        <link rel="shortcut icon" href="../img/logo esteves epi.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilo_base_css.css">
        <link rel="stylesheet" href="../css/card_p.css">

        <title>Inicio</title>
        <script src="https://kit.fontawesome.com/8c6a31145e.js" crossorigin="anonymous"></script>

    </head>

    <body>
        
        <nav>

        <a href="../index.php"><img src="../img/logo esteves epi.png" class="logo"></a>


            <div class="camp_search">

                <form action="php/pesquisa.php" method="get">

                <input type="text" name="s" id="search" placeholder="Digite aqui...">

                    <button type="submit" style="background-color: transparent; color: transparent; border: 0px;"><i class="fa-solid fa-magnifying-glass fa-2xl" style="color: black; cursor: pointer;"></i></button>

                </form>
                
            </div>

                <div class="drop_conteiner">

                    <button id="btt_drop">Categoria</button>

                        <div class="conteudo_drop">
                            
                            <a href="#">Roupas</a>
                            <a href="#">Acessorios</a>
                            <a href="#">Livros</a>
                            <a href="php/pesquisa.php" name="vitor">Mangá</a>

                        </div>

                </div>

        </nav>

        <div class="container">
        <?php

            $dbh = new PDO('mysql:host=localhost;dbname=epi', 'root', '');

            $sth = $dbh->prepare('SELECT * FROM produtos');
            $sth->execute();

            $resultados = $sth->fetchAll(PDO::FETCH_ASSOC);

            foreach($resultados as $i) {
                ?>
                    <div class="produto">

                        <img src="<?php $i['img']; ?>" class="img_p" alt="" srcset="">
                        <p class="nome_p"><?php echo$i['nome']; ?></p>
                        <p class="preco_p"><?php echo$i['preco']; ?></p>
                        <p class="desc_p"><?php echo $i['info']; ?></p>
                        <span><a href="php/produto.php?id=<?php echo $i['id']; ?>" class="sell"><i class="fa-regular fa-credit-card" style="color: #ffffff;"></i>COMPRAR</a></span>
                        <span><a href="php/carrinho.php?id=<?php echo $i['id']; ?>" class="add_car"><i class="fa-solid fa-cart-shopping" style="color: #000000;"></i>CARRINHO</a></span>

                    </div>
                
                <?Php
            }

            ?>

        </div>

    </body>

</html>