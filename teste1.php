<?php

    $conexao = new PDO("mysql:dbname=trailer_marine;host=localhost;charset=utf8","root","");

    $select = $conexao->prepare("SELECT * FROM produtos WHERE id = 1");
    $select -> execute();
    $fetch = $select -> fetchAll();

    foreach($fetch as $produto){

        echo 'Nome do produto: ' .$produto['nome']. '&nbsp;&nbsp; 
        Quantidade: '.$produto['quantidade'].  '&nbsp;&nbsp; 
        Preço: R$' .number_format($produto['preco'],2,",","."). '<br>';
        echo '<a href="carrinhao.php?add=carrinho&id=' .$produto['id']. '">Adicionar ao carrinho</a><br/>';

    }; 

?>