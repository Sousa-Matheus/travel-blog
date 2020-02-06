<?php require_once('Connections/con_lesshome.php'); ?>
<?php
if ( !function_exists( "GetSQLValueString" ) ) {
	function GetSQLValueString( $theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "" ) {
		if ( PHP_VERSION < 6 ) {
			$theValue = get_magic_quotes_gpc() ? stripslashes( $theValue ) : $theValue;
		}

		$theValue = function_exists( "mysql_real_escape_string" ) ? mysql_real_escape_string( $theValue ) : mysql_escape_string( $theValue );

		switch ( $theType ) {
			case "text":
				$theValue = ( $theValue != "" ) ? "'" . $theValue . "'": "NULL";
				break;
			case "long":
			case "int":
				$theValue = ( $theValue != "" ) ? intval( $theValue ) : "NULL";
				break;
			case "double":
				$theValue = ( $theValue != "" ) ? doubleval( $theValue ) : "NULL";
				break;
			case "date":
				$theValue = ( $theValue != "" ) ? "'" . $theValue . "'": "NULL";
				break;
			case "defined":
				$theValue = ( $theValue != "" ) ? $theDefinedValue : $theNotDefinedValue;
				break;
		}
		return $theValue;
	}
}

$colname_rs_post = "-1";
if ( isset( $_GET[ 'cod_pag' ] ) ) {
	$colname_rs_post = $_GET[ 'cod_pag' ];
}
mysql_select_db( $database_con_lesshome, $con_lesshome );
$query_rs_post = sprintf( "SELECT * FROM tb_blog_lh WHERE cod_pag = %s", GetSQLValueString( $colname_rs_post, "int" ) );
$rs_post = mysql_query( $query_rs_post, $con_lesshome )or die( mysql_error() );
$row_rs_post = mysql_fetch_assoc( $rs_post );
$totalRows_rs_post = mysql_num_rows( $rs_post );
?>
<?php
include( 'con_lesshome.php' );
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
	<meta name="msvalidate.01" content="849E682448A1371E46739FE1D2085CF0"/>

	<link rel="icon" href="favicon.png">
	<link href="meus_estilos.css" rel="stylesheet">
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="fontewesome/css/all.css" rel="stylesheet" type="text/css">
	<link href="lightbox2/dist/css/lightbox.min.css" rel="stylesheet" type="text/css">
	<script src="fontewesome/js/all.js"></script>
	<script src="lightbox2/dist/js/lightbox-plus-jquery.min.js"></script>

	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css"/>
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->


</head>

<body>
	<!--(main)Definindo importancia para o conteúdo do site inteiro-->
	<main>
		<!--Título h1 deverá ser igual ao título da página-->

		<!--Início do topo ou cabeçalho do site-->
		<div class="container">
			<section>
				<header class="teste-header">
					<!--Logo com link-->
					<h1 class="fonte-zero">LessHome</h1>

					<h2 class="fonte-zero">LessHome Topo<h2>
	<div class="row">
            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-5"> <a href="index.php"><img src="imagens/logo_finalizado.png" alt="Logo LessHome" title="Logo LessHome" class="img-fluid"/></a> </div>
            <div class="col-xl-7 col-lg-6 col-md-6 col-sm-5 col-5 texto-topo">LessHome</div>
            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-2"><i class="fab fa-facebook-square"></i> <i class="fab fa-instagram"></i>
            </div>
</div>
	</header>
	</section>
	</div>
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
	<h2 class="fonte-zero">Conteúdo</h2>
					<h3><?php echo $row_rs_post['titulo']; ?></3>
	  <h4 style="text-align: center"><?php echo $row_rs_post['sub_titulo']; ?></h4>
		<div style="text-align: justify">
		<p><?php echo $row_rs_post['conteudo']; ?></p>
	<div>
	  <div style="float: left; margin: 5px;"><a href="<?php echo $row_rs_post['img1_g']; ?>" data-lightbox="example-set"><img src="<?php echo $row_rs_post['img1_p']; ?>" class="img-fluid"></a></div>
<div style="float: left; margin: 5px;"><a href="<?php echo $row_rs_post['img2_g']; ?>" data-lightbox="example-set"><img src="<?php echo $row_rs_post['img2_p']; ?>" class="img-fluid"></a></div>
<div style="float: left; margin: 5px;"><a href="<?php echo $row_rs_post['img3_g']; ?>" data-lightbox="example-set"><img src="<?php echo $row_rs_post['img3_p']; ?>" class="img-fluid"></a></div>
<div style="float: left; margin: 5px;"><a href="<?php echo $row_rs_post['img4_g']; ?>" data-lightbox="example-set"><img src="<?php echo $row_rs_post['img4_p']; ?>" class="img-fluid"></a></div>
<div style="float: left; margin: 5px;"><a href="<?php echo $row_rs_post['img5_g']; ?>" data-lightbox="example-set"><img src="<?php echo $row_rs_post['img5_p']; ?>" class="img-fluid"></a></div>
<div style="float: left; margin: 5px;"><a href="<?php echo $row_rs_post['img6_g']; ?>" data-lightbox="example-set"><img src="<?php echo $row_rs_post['img6_p']; ?>" class="img-fluid"></a></div>
		</div></div><br>
<div class="video_resp" style="text-align: center"><?php echo $row_rs_post['link_video']; ?></div><br>
		
	  
	<div style="text-align: center">
	<h5>Hoteis/Pacotes de Viagens:</h5>
		
	  <a href="<?php echo $row_rs_post['link_externo']; ?>" target="_blank">Hoteis Decolar</a>
		</div>
</div>
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
mysql_free_result($rs_post);
?>
<!--(width="N°px" height="N°px") Largura e Altura da Imagem-->
<!--<a href="Link.com" title="Titulo do Link " Target="_blank">Nome do link</a>-->
<!-- quebra de linha <br>-->