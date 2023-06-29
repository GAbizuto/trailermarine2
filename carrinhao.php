<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
    <link rel="stylesheet" href="css/carrinhozinho.css">
    <link href='https://fonts.googleapis.com/css?family=Bayon' rel='stylesheet'>
</head>
<body>
    <header>
        <nav role="navigation">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul id="menu">
                    <a href="pacotes.html"><li>Pacotes &nbsp;<img src="imagens/icons8-sacola-de-compras-50.png"height="25px" width="25px" ></li></a>
                    <a href="paginainicial.html"><li>Pagina inicial&nbsp;<img src="imagens/icons8-casa-30.png" height="25px" width="25px"></li></a>
                    <a href="cadastro.html"><li>Cadastros&nbsp;<img src="imagens/icons8-casa-30.png" height="25px" width="25px"></li></a>
                    <a href="login.html"><li>Login&nbsp;<img src="imagens/icons8-usuário-50.png" height="25px" width="25px"></li></a> 
                    <a href="suporte.html"><li>Suporte&nbsp;<img src="imagens/icons8-suporte-50.png" height="25px" width="25px" ></li></a>
                </ul>
            </div>
        </nav>
        <div class="menu">
            <h1><a href="paginainicial.html">Trailermarine</a></h1>
            <div class="submarino"></div>
            <div class="icon">
                <div class="submarino"><a href="carrinho.html"><img src="imagens/submarino.png" width="80px" height="70px"></a></div>
                <div class="conta"><a href="user.html"><img src="imagens/icon.png" width="60px" height="50px"></a></div>
            </div> 
        </div>
    </header>
    <div class="container">
        <div class="caixona"> 
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

        

        foreach ($_SESSION['itens'] as $idProduto => $quantidade) {
            $select = $conexao->prepare("SELECT * FROM produtos WHERE id = ?");
            $select->bindParam(1, $idProduto);
            $select->execute();
            $produtos = $select->fetchAll();
            $total = $quantidade * $produtos[0]['preco'];

        echo '
        <div class="item-carrinho">
            <div class="escritasPacote">
                <div class="imagem"><img src="data:image/jpeg;base64,' . base64_encode($produtos[0]['imagem']) . '" style="width: 190px; height: 145px; border: 3px solid rgba(15, 48, 56, 0.726);"></div>
                <div class="NomePacote">' . $produtos[0]["nome"] . '</div>
                <br>
                <div class="PrecoPacote">Preço: R$' . number_format($produtos[0]['preco'], 2, ',', '.') . '</div>
                <br>
                <div class="QuantidadePacote">Quantidade: ' . $quantidade . '</div>
                <br>
                <div class="TotalPacote">Total: R$' . number_format($total, 2, ',', '.') . '</div>
            </div>
            <br>
            <a href="remover.php?remover=carrinho&id=' . $idProduto . '" class="remover"> Remover </a>
        </div>

        <br><br><br><br>
    ';
          
        
            array_push(
                $_SESSION['dados'],
                array(
                    'id_produto' => $idProduto,
                    'quantidade' => $produtos[0]['quantidade'],
                    'preco' => $produtos[0]['preco'],
                    'total' => $total
                )
            );
        }

        echo'<a href="formapagamento.php" class="finalizar"> Finalizar Pedido </a>';
    
   }

?>

        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
