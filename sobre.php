<?php
include ('con_lesshome.php');

?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>LessHome</title>
<meta name="description" content="projeto blog de viagens">
<meta name="keywords" content="travel, viagem, destinos, são paulo, campos do jordão">
<meta name="author" content="Matheus Sousa">
<meta name="robots" content="index, follow">
<meta name="msvalidate.01" content="849E682448A1371E46739FE1D2085CF0" />

<link rel="icon" href="favicon.png">
<link href="meus_estilos.css" rel="stylesheet">
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="fontewesome/css/all.css" rel="stylesheet" type="text/css">
  <script src="fontewesome/js/all.js"></script>


<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->


</head>
<body>
<!--(main)Definindo importancia para o conteúdo do site inteiro-->
	<main>
	<!--Título h1 deverá ser igual ao título da página-->

<!--Início do topo ou cabeçalho do site-->
		<?php include 'header.php'?>
<!--Menu do site-->
	<?php include 'menu.php'?>
	
<!--FIM Início do topo ou cabeçalho do site-->

<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/bariloche.jpg" alt="Bariloche" title="Bariloche" id="wows1_0"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/camposdojordo1.jpg" alt="css slider" title="Campos Dos Jordão" id="wows1_1"/></a></li>
		<li><img src="data1/images/morainelake1.jpg" alt="Banff" title="Banff" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Bariloche"><span><img src="data1/tooltips/bariloche.jpg" alt="Bariloche"/>1</span></a>
		<a href="#" title="Campos Dos Jordão"><span><img src="data1/tooltips/camposdojordo1.jpg" alt="Campos Dos Jordão"/>2</span></a>
		<a href="#" title="Banff"><span><img src="data1/tooltips/morainelake1.jpg" alt="Banff"/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap image slider</a> by WOWSlider.com v8.8</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->




<!--Dercrição ou conteúdo do site-->
<div class="container">
<section class="section-teste">
<h3>Sobre O blog:</h3>

<p>Este blog é trabalho de conclusão de curso de programação web e tem como objetivo mostrar alguns destinos de viagens programados em HTML5, CSS3, PHP, MySQL.</p>
<p>Estamos utilizando imagens públicas da web, não promovendo e nem mesmo denegrindo as marcas e valores das empresas ou produtos.</p>



   
	</section>
</div>
<!--FIM Dercrição ou conteúdo do site-->


<!--Trabalhando com Rodapé-->
	<div class="container-fluid footer-teste">
  
 <div class="container text-center footer-teste">
      <section>
      <footer>
        <h2 class="fonte-zero">Validação do site</h2>
        <div class="row">
          <div class="col-md-12">&copy; 2019 - Todos os direitos reservados para LessHome</div><br>
          <br>
          <div class="col-md-2"><a href="https://validator.w3.org/check?uri=referer" target="_blank" title="Validador HTML5">
<img src="imagens/validation-html5.png" alt="HTML5 Validado" title="HTML5 Validado">
</a>
          </div>
          <div class="col-md-2"><a href="https://jigsaw.w3.org/css-validator/validator?uri=https://www.sandromir.com.br/senac2019/22/meus_estilos.css" target="_blank" title="Validador CSS3">
<img src="imagens/validation-css3.gif" alt="CSS3 Validado" title="CSS3 Validado">
</a>
          </div>
          <div class="col-md-2"><a href="https://www.ctsdigital.com.br/#siteseguro" target="_blank"><img src="imagens/site-seguro-https.jpg" alt="Site Seguro. Entenda o que é SSL" title="Site Seguro. Entenda o que é SSL"></a>
          </div>
          <div class="col-md-6"><a href="https://www.ctsdigital.com.br/index.php#siteresponsivo" title="Entenda sobre responsivo" target="_blank">
<img src="imagens/site-responsivo.png" alt="Site responsivo" title="Site responsivo">
</a> Site responsivo - by Matheus Sousa</div>
        </div>
      </footer>
        </section>
    </div>
</div>

<!-- FIM Trabalhando com Rodapé-->

</main>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>


 
<!--(width="N°px" height="N°px") Largura e Altura da Imagem-->
<!--<a href="Link.com" title="Titulo do Link " Target="_blank">Nome do link</a>-->
<!-- quebra de linha <br>-->
