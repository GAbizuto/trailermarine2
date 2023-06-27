<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adicionais</title>

  <link rel="stylesheet" href="css/adicionais.css">
  <link href='https://fonts.googleapis.com/css?family=Bayon' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
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
        <h1>Trailermarine</h1>
        <div class="submarino"></div>
        <div class="icon">
          <img src="imagens/submarino.png" width="70px" height="60px">
          <img src="imagens/icon.png" width="60px" height="50px">
        </div> 
    </div>  
  </header>


  <div class="cima">
    <div class="voltar"> 
      <button onclick="voltar();" class="botao"><img src="imagens/back.png" width="48px" height="48px"></button>
    </div>
    <div class="selecionado"> Pacote selecionado:      CARIBE </div>
  </div>
  <br><br>


  <div class="container">
    <br> <br>

    <div class="infopacote"><img src="imagens/pacote3.jfif" width="200px"
      height="200px">&nbsp;&nbsp;<div class="texto">Outras classes
        Observe que, no print a scrollbar é simples, porém a formatação do CSS é versátil e útil. Além disso, existem outras classes que também podem ser úteis:
        <br>
        ::-webkit-scrollbar-button se refere as setas da scrollbar comum
        <br>
        ::-webkit-scrollbar-track-piece é a parte da alça fixa que não é coberta pela alça móvel
        <br>
        ::-webkit-scrollbar-corner canto inferior onde as barras de rolagem y e x se encontram
        <br>
        ::-webkit-resizer redimensionamento da box que aparece no canto inferior
        <br>
        Todas essas classes podem ser usadas em conjunto, de maneira que sua barra de rolagem seja completamente formatável.
        <br>
        Gostou das dicas do post? Acompanhe nosso blog para não perder mais desse conteúdo, além de ter acesso a muito mais.</div>
    </div>
  
    <fieldset>
      <br>
      <div class="a1">
        <form action="" name="formulario" onchange="calcularValores()">
        <label class="container2">
         
          <input type="checkbox" name="check" id="check1" value="200" onchange="somar(this)"/>
          Comidas - R$ 200,00
          <div class="checkmark"></div>
        </label>
      </div>
      <br>
      <div class="a1">
        <label class="container2">
          <input type="checkbox" name="check"  id="check2" value="350" onchange="somar(this)"/>
          Bebidas - R$ 350,00
          <div class="checkmark"></div>
        </label>
      </div>
      <br>
      <div class="a1">
        <label class="container2">
          <input type="checkbox" name="check"  id="check3" value="100" onchange="somar(this)"/>
          Roupa de cama - R$ 100,00
          <div class="checkmark"></div>
        </label>
      </div>
      <br>
      <div class="a1">
        <label class="container2">
          <input type="checkbox" name="check"  id="check4" value="100" onchange="somar(this)"/>
          Toalhas de banho - R$ 100,00
          <div class="checkmark"></div>
        </label>
      </div>
      <br>
      <div class="a1">
        <label class="container2">
          <input type="checkbox" name="check"  id="check5" value="100" onchange="somar(this)" />
          Itens Higiene - R$ 100,00
          <div class="checkmark"></div>
        </label>
      </div>
      <br>
      <label class="total">TOTAL </label>&nbsp;  <label class="total">R$</label><input class="valorfinal" type="text" id="valororcamento1" value=""  disabled>

     
    </form> 
      <br>
      <div class="confirma">
        CONFIRMAR:
        <button onclick="confirmar();" class="confirmar">
          <img src="imagens/send.png">

        </button>
      </div>
  </fieldset>
  
</div>



</body>
<script>
function confirmar() 
{
  location.href="http://localhost/trailermarine2/formapagamento.html"
}
function voltar() 
{
  location.href="http://127.0.0.1:5500/pacotes.html"
}
var soma1 = 55000
var soma2 = 0

function somar(check)
{
if ( check.checked ) soma1 += 1*check.value;
  else               soma1 -= 1*check.value;

document.getElementById("valororcamento1").value = soma1
}

function calcularValores()
{
soma2 = 0 
for (var i=1; i<=7; i++)
  {
  var check = document.getElementById("check"+i)
  if ( check.checked ) soma2 += 1*check.value;
  }

document.getElementById("valororcamento2").value = soma2
}


</script>

</script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>