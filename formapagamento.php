<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conta</title>
    <link rel="stylesheet" href="css/user.css">
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
 
            <div class="caixona"> 
                <H2>ESCOLHA A FORMA DE PAGAMENTO:</H2>
                <div class="minicaixa">

                    
                    <a href="pix.html">
                        
                        <button class="dados"> 
                            <div class="icone"><img src="imagens/PIX.png"width="80px" height="90px"><br><br><h3>pix</h3></div>
                       </button>
                   </a>
                   <a href="cartao.html" >
                    <button class="dados">
                        <div class="icone"><img src="imagens/cartão.png"width="80px" height="90px"><br><br><h3>cartao</h3></div>
                    </button>
                    
                   </a>
                
                </div>
            </div>
            <br><br>
            <footer>
                <div class="rodape">

                </div>
        
            </footer>

            
        
          
</body>
      
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>    
</html>
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