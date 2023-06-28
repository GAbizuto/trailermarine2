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
  <div class="perfil">
    <div class="esquerdadiv">
        <div class="fotop"> 
          <?php 
          
          $i = base64_encode($dados_imagem);

          
          if(isset($imagem)){
             echo(" <img src='data:image/jpeg;base64,$i' width='100px'> <br> <br> ");
          }

          ?>
        </div>
        <form action="salvar_imagem.php" method="post" enctype="multipart/form-data" class="formulas"><label for='selecao-arquivo'>Selecionar um arquivo &#187;<input id='selecao-arquivo' type='file' class="file"id="imagem" name="imagem"></label><br><br><input type="submit" value="Enviar" class="submit">
     
        
       
        <h3>Usuário</h3>
        <p>0 Compras em nosso site</p>
        <p>2 Produtos no Carrinho</p>
    </div>
    <div class="direitadiv">
        <div class="inputzperfil">
            <h3>Dados do Usuário:</h3>
            <div class="tablep">
                Nome:&nbsp; <?php echo $nome; ?>
                <button>Alterar</button>
            </div>
            <div class="tablep">
                Email:&nbsp; <?php echo $email; ?>
                <button>Alterar</button>
            </div>
            <div class="tablep">
                talefone:&nbsp; <?php echo $telefone; ?>
                <button>Alterar</button>
            </div>
        </div>
    </div>
  </div>
</div>

            
        
          
</body>
      
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>    
</html>