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

    <div class="pacotes"> Pacotes:  </div>
    <div class="quadros">

        <button class="quadro" onclick="mostrar1();">
            <div class="imagem"> <img src="imagens/pacote1.avif" width="200px" height="150px"></div>
            <div class="escritas">
                <div class="NomePacote"> Pacote <br> BALI</div>
                <div class="TipoPacote">    CASAL   </div>
                <div class="PrecoPacote"> R$ 30.000 </div>
                <?php include 'teste1.php'; ?>
            </div>
        </button>

        <button class="quadro" onclick="mostrar2();">
        <img src="trailermarine2/imagens' . $produtos[0]['imagem'] . '" alt="Imagem do produto" width="200" height="150"><br/>
                <div class="escritas">
                <div class="NomePacote"> Pacote MALDIVAS</div>
                <div class="TipoPacote">    FAMÍLIA   </div>
                <div class="PrecoPacote"> R$ 25.000 </div>
                <?php include 'teste2.php'; ?>
            </div>
        </button>
        <button class="quadro" onclick="mostrar3();">
            <div class="imagem"> <img src="imagens/pacote 4.jfif" width="200px" height="150px"></div>
            <div class="escritas">
                <div class="NomePacote"> Pacote <br> CARIBE</div>
                <div class="TipoPacote">    CASAL   </div>
                <div class="PrecoPacote"> R$ 55.000 </div>
                <?php include 'teste3.php'; ?>
            </div>
        </button>

        <button class="quadro" onclick="mostrar4();">
            <div class="imagem"> <img src="imagens/pacote3.jfif" width="200px" height="150px"> </div>
            <div class="escritas">
                <div class="NomePacote"> Pacote <br> HAVAÍ</div>
                <div class="TipoPacote">    FAMÍLIA   </div>
                <div class="PrecoPacote"> R$ 40.000 </div>
                <?php include 'teste4.php'; ?>
            </div>
        </button>

    </div>
</body>
<script>
    function mostrar1()
    {
        location.href="http://localhost/trailermarine2/adicionais.php"
    }
    function mostrar2()
    {
        location.href="http://localhost/trailermarine2/adicionais2.php"
    }
    function mostrar3()
    {
        location.href="http://localhost/trailermarine2/adicionais3.php"
    }
    function mostrar4()
    {
        location.href="http://localhost/trailermarine2/adicionais4.php"
    }
</script>
</html>