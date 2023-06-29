<?php
  session_start();
  $email = $_SESSION['email'];
  $nome = $_SESSION['nome'];
  $senha = $_SESSION['senha'];
  $telefone = $_SESSION['telefone'];
  $cpf = $_SESSION ['cpf'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>perfil</title>
    <link rel="stylesheet" href="css/perfil.css">
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
          
          
            <div class="caixona"> 
              <a href="user.html"><button class="voltar"><img src="imagens/voltar.png" width="50px" height="50px"></button></a>                  
              <H2>   PERFIL</H2>
                <div class="minicaixa">
              
              
                  <h3>
               
                Nome: <?php echo $nome; ?>
                <br><br>
              Telefone: <?php echo $telefone; ?>
              <br><br>
              E-mail: <?php echo $email; ?>
              <br><br>
              cpf: <?php echo $cpf; ?>
              <br> <br>

            </h3>
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