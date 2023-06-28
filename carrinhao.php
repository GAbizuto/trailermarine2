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
        echo 'Carrinho vazio <br> <a href "conecta_carrinho.php">Adicionar intens</a>';
    }else{
        $conexao = new PDO("mysql:dbname=trailer_marine;host=localhost;charset=utf8","root","");
        foreach ($_SESSION['itens'] as $idProduto => $quantidade) 
        {
            $select = $conexao->prepare("SELECT * FROM produtos WHERE id = ?");
            $select->bindParam(1, $idProduto);
            $select->execute();
            $produtos = $select->fetchAll();

            echo
            $produtos[0] ["nome"]. '<br/>
            Preço: R$' .number_format($produtos[0]['preco'],2,',','.'). '<br/>
            Quantidade:' .$quantidade. '<br/><hr/>'
            ;

        }

       
    
   }

?>