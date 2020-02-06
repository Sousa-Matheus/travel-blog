<?php
$servidor = "localhost";
$bd = "db_lesshome";
$usuario = "root";
$senha = "";

$strcon = mysqli_connect($servidor,$usuario,$senha,$bd) or
die ('Erro ao conectar ao baco de dados');

?>