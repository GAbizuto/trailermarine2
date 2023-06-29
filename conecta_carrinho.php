<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PACOTES</title>

    <link rel="stylesheet" href="css/pacotes.css">
    <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Bayon' rel='stylesheet'>

</head>
<body>

    <header>         
        <nav role="navigation">
            <div id="menuToggle">
              <!--
              A fake / hidden checkbox is used as click reciever,
              so you can use the :checked selector on it.
              -->
              <input type="checkbox" />
              
              <!--
              Some spans to act as a hamburger.
              
              They are acting like a real hamburger,
              not that McDonalds stuff.
              -->
              <span></span>
              <span></span>
              <span></span>
              
              <!--
              Too bad the menu has to be inside of the button
              but hey, it's pure CSS magic.
              -->
              <ul id="menu">
                <a href="pacotes.html"><li>Pacotes &nbsp;<img src="imagens/icons8-sacola-de-compras-50.png"height="25px" width="25px" ></li></a>
                <a href="paginainicial.html"><li>Pagina inicial&nbsp;<img src="imagens/icons8-casa-30.png" height="25px" width="25px"></li></a>
                <a href="cadastro.html"><li>Cadastros&nbsp;<img src="imagens/icons8-casa-30.png" height="25px" width="25px"></li></a>
                <a href="login.html"><li>Login&nbsp;<img src="imagens/icons8-usuário-50.png" height="25px" width="25px"></li></a> 
                <a href="suporte.html"><li>Suporte&nbsp;<img src="imagens/icons8-suporte-50.png" height="25px" width="25px" ></li></a>
              
                <a href="suporte.html"><li>Suporte</li></a>
              </ul>
            </div>
          </nav>
     
        
        
    
       <div class="menu">
        <h1><a href="paginainicial.html">Trailermarine</a></h1>
        <div class="submarino">
           
            
        </div>
        <div class="icon">
            <div class="submarino"><a href="carrinho.html"><img src="imagens/submarino.png" width="80px" height="70px"></a></div>
            <div class="conta"><a href="user.html"><img src="imagens/icon.png" width="60px" height="50px"></a></div>
   
        </div> 
    </div>
    </header>


<?php
$conexao = new PDO("mysql:dbname=trailer_marine;host=localhost;charset=utf8","root","");
$select = $conexao->prepare("SELECT * FROM produtos");
$select->execute();
$fetch = $select->fetchAll();
?>
<div class="pacotes"> Pacotes:  </div>
    <div class="quadros">
<?php foreach($fetch as $produto): ?>
    
        <button class="quadro">
            <div class="imagem"><img src="data:image/jpeg;base64,<?php echo base64_encode($produto['imagem']); ?>" style="width: 190px; height: 145px; border: 3px solid rgba(15, 48, 56, 0.726);"></div>
            <div class="NomePacote"><?php echo 'Nome do produto: ' . $produto['nome']; ?></div>
            <div class="PrecoPacote"><?php echo 'Preço: R$ ' . number_format($produto['preco'], 2, ",", "."); ?></div>
            <a href="carrinhao.php?add=carrinho&id=<?php echo $produto['id']; ?>" class="carrinho">Adicionar ao carrinho</a>
        </button>
    
<?php endforeach; ?>
    </div>
</html>
