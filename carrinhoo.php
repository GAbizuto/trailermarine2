<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de compras</title>
    <style type="text/css">
        *{margin: 0; padding: 0; box-sizing: border-box;}
        h2.title{
            background-color: #069;
            width: 100%;
            padding: 20px;
            text-align: center;
            color: white;
        }

        .carrinho-container{
            display: flex; 
            margin-top: 10px;           
        }

        .produto{
            width: 25%;
            padding: 0 30px;
        }
        .produto img {
            max-width: 100%
        }
        .produto a{
            display: block;
            width:100%;
            padding:10px;
            color:white;
            background-color: #5fb382;
            text-align: center;
            text-decoration: none;
        }

        .carrinho-item{
            max-width: 1200px;
            margin: 10px auto;
        }
        .carrinho-item p{
            font-size: 16px;
            color: black;
            padding-bottom: 10px;
            border-bottom: 2px dotted #ccc;
        }
    </style>

</head>
<body>
    <h2 class="title">Carrinho com PHP<h2>
    <div class="carrinho-container">

    <?php

$items = array(
    ['nome' => 'Pacote 1 - Bali', 'item' => 'imagens/pacote1.avif', 'preco' => '200'],
    ['nome' => 'Pacote 2 - Maldivas', 'item' => 'imagens/pacote2.jfif', 'preco' => '300'],
    ['nome' => 'Pacote 3 - Caribe', 'item' => 'imagens/pacote3.jfif', 'preco' => '400'],
    ['nome' => 'Pacote 4 - Havaí', 'item' => 'imagens/pacote 4.jfif', 'preco' => '500']
);

        foreach ($items as $key => $value) {
    ?>
        <div class="produto">
            <img src="<?php echo $value['item']; ?>" />
            <a href="?adicionar=<?php echo $key  ?>">Adicionar ao carrinho</a>
        </div><!--produto-->

        <?php
            }
        ?>

        </div><!-- carrinho-container-->

        <?php

           if(isset($_GET['adicionar'])){
                // Vamos adicionar os produtos no carrinho:
                $idProduto = (int) $_GET['adicionar'];
                if(isset($items[$idProduto])){
                    if(isset($_SESSION['carrinho'][$idProduto])){
                        $_SESSION['carrinho'][$idProduto]['quantidade']++;
                    } else{
                        $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1,'nome'=>$items[$idProduto]['nome'],'preco' =>$items[$idProduto]['preco'] );
                    }
                    echo '<script>alert("O item foi adicionado ao carrinho.");</script>';
                    } else{
                        die('Você não pode adicionar um produto que não existe.');
                }
                
           } 

        ?>

        <h2 class="title"> Carrinho:</h2>

        <?php include('carrinho2.php'); ?>
    </body>
</html>


