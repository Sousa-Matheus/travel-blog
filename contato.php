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
	<div style="margin: 0px 15px 0px 15px">
	
<h2>Fale Conosco</h2>

<form method="post" action="#" >
<input type="hidden" name="email" value="sousa94.matheus@gmail.com">
<input type="hidden" name="recipient" value="sousa94.matheus@gmail.com">
<input type="hidden" name="subject" value="Formulário de contato de site 16 Matheus">
<input type="hidden" name="redirect" value="obrigado.html">


Nome:
<input type="text" size="60" name="Nome" id="nome" required="required"><br><br>

E-mail:
<input type="email" size="60" name="E-mail" id="email" required="required"><br><br>

Telefone:
<input type="tel" size="30" name="Telefone" id="telefone"><br><br>

Cidade:
<input type="text" size="40" name="Cidade" id="cidade">

UF:
<select name="Estado" id="estado">
<option >&nbsp;</option>
<option value="SP">SP</option>
<option value="RJ">RJ</option>
<option value="MG">MG</option>
<option value="RS">RS</option>
<option value="PR">PR</option>
<option value="SC">SC</option>
<option value="ES">ES</option>
</select>
<br><br>

Gostou do Blog?
<input type="radio" name="Gostou" value="Sim" checked="checked">Sim
<input type="radio" name="Gostou" value="Não">Não
<br><br>

Comentários:<br>
<textarea name="Comentários" id="comentarios" cols="65" rows="8" required="required"></textarea><br><br>

<input type="submit"><br><br>

</form>
		</div>
</section>
	</div>

    </div>
</div>

<!--Trabalhando com Rodapé-->
	<?php include 'rodape.php'?>


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
