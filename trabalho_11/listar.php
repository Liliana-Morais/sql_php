<?php

require_once "requisitos.php";


$colaborador = verificar_logado();

$coluna = "";
$ordem = "";

$form = !empty($_GET["coluna"]) && !empty($_GET["ordem"]);
if($form){
  $coluna = $_GET["coluna"];
  $ordem = $_GET["ordem"];
  $produtos = select_sql("SELECT * FROM produtos_papelaria_2024 ORDER BY $coluna $ordem");
}
else{$produtos = select_sql("SELECT * FROM produtos_papelaria_2024");}


require_once "components/header.php";
require_once "views/listar_view.php";
require_once "components/footer.php";

?>