<?php
    session_start();
    
    foreach($_SESSION['dados'] as $produtos) {
        $conexao = new PDO("mysql:dbname=trailer_marine;host=localhost;charset=utf8","root","");
        $insert = $conexao -> prepare("INSERT INTO pedidos () VALUES (NULL, ?, ?, ?, ?)");
        $insert->bindParam(1,$produtos['id_produto']);
        $insert->bindParam(2,$produtos['quantidade']);
        $insert->bindParam(3,$produtos['preco']);
        $insert->bindParam(4,$produtos['total']);
        $insert->execute();

    }

?>