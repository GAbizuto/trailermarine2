<?php
    session_start();
    if(!isset($_SESSION['itens']))
    {
        $_SESSION['itens'] = array();
    }

    if(isset($_GET['add']) && $_GET['add'] == "carrinho")
    {
        $idProduto = $_GET['id'];
        if(!isset($_SESSION['itens'] [$idProduto]))
        {
            $_SESSION['itens'] [$idProduto] = 1;
        }else{
            $_SESSION['itens'] [$idProduto] += 1;
        }
    }

    if(count($_SESSION['itens']) == 0) {
        echo 'Carrinho vazio <br> <a href="conecta_carrinho.php">Adicionar itens</a>';
    }else{
        $conexao = new PDO("mysql:dbname=trailer_marine;host=localhost;charset=utf8","root","");
        
        $_SESSION['dados'] = array();

        foreach ($_SESSION['itens'] as $idProduto => $quantidade) 
        {
            $select = $conexao->prepare("SELECT * FROM produtos WHERE id = ?");
            $select->bindParam(1, $idProduto);
            $select->execute();
            $produtos = $select->fetchAll();
            $total = $quantidade * $produtos[0] ['preco'];
            echo
            $produtos[0] ["nome"]. '<br/>
            Preço: R$' .number_format($produtos[0]['preco'],2,',','.'). '<br/>
            Quantidade:' .$quantidade. '<br/>
            Total: R$' .number_format($total,2,',','.').'<br/>
            <a href="remover.php?remover=carrinho&id='.$idProduto.'"> Remover</a>
            <hr/>
            ';

            array_push(
            $_SESSION['dados'],
            array(
            'id_produto' => $idProduto,
            'quantidade' => $produtos[0]['quantidade'],
            'preco' => $produtos[0]['preco'],
            'total' => $total

            )
            ); // Fecha o ArrayPush

        } // Fecha o foreach

        echo'<a href="finalizar.php"> Finalizar Pedido </a>';
    
   }

?>