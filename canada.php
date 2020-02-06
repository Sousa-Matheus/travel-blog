<?php require_once('Connections/con_lesshome.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_con_lesshome, $con_lesshome);
$query_rs_canada = "SELECT cod_pag, titulo, descricao, img1_p FROM tb_blog_lh WHERE cod_pais = 1";
$rs_canada = mysql_query($query_rs_canada, $con_lesshome) or die(mysql_error());
$row_rs_canada = mysql_fetch_assoc($rs_canada);
$totalRows_rs_canada = mysql_num_rows($rs_canada);
?>
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
<h3>Canada:</h3>

<?php do { ?>
  <div class="col-lg-4"><p><strong><?php echo $row_rs_canada['titulo']; ?></strong></p>
  <p><img src="<?php echo $row_rs_canada['img1_p']; ?>" class="img-fluid"> <?php echo $row_rs_canada['descricao']; ?> <a href="post.php?cod_pag=<?php echo $row_rs_canada['cod_pag']?>">Saber Mais...</a></p>
  </div>
  <hr>
  <?php } while ($row_rs_canada = mysql_fetch_assoc($rs_canada)); ?>
</section>
</div>
<!--FIM Dercrição ou conteúdo do site-->


<!--Trabalhando com Rodapé-->
	<?php include 'rodape.php'?>

<!-- FIM Trabalhando com Rodapé-->

</main>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>
<?php
mysql_free_result($rs_canada);
?>
<!--(width="N°px" height="N°px") Largura e Altura da Imagem-->
<!--<a href="Link.com" title="Titulo do Link " Target="_blank">Nome do link</a>-->
<!-- quebra de linha <br>-->
