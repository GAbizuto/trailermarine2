<?php
  session_start();
  $email = $_POST ["email"]; //pega o input
  $senha = $_POST ["senha"];

    include("conecta.php"); // conectar com banco de dados

    $comando = $pdo->prepare("SELECT * FROM  usuario_data WHERE email = :email and senha = :senha ");
    $comando->bindParam(':email', $email);
    $comando->bindParam(':senha', $senha);
   
    $resultado = $comando->execute();

    if($resultado === TRUE)
    {

    }

    $n = 0;
    $admin= "n";
    while ( $linhas = $comando->fetch() )
    {
        $n = 1;
        $nome = $linhas["nome"];
        $telefone= $linhas["telefone"];
        $cpf = $linhas["cpf"];
        $admin = $linhas ["admin"];
        
    }

    if($n == 0)
    {
        header ("Location: login.html");
    }

    if($n == 1)
    {
        if($admin == "s")
        {
            header ("Location: pgloginadmin.html");
        }

        else
        {
            header ("Location: paginainicial.html");
            $_SESSION['email'] = $email;
            $_SESSION['nome'] = $nome;
            $_SESSION['senha'] = $senha;
            $_SESSION['telefone'] = $telefone;
            $_SESSION['cpf'] = $cpf;
        }
    }

?>