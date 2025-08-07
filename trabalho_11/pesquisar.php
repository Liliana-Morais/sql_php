<?php

require_once "requisitos.php";


$colaborador = verificar_logado();

$pesquisa = "";
$produto = null;
$erro = "";

$form = !empty($_GET["pesquisa"]);
if($form){
  $pesquisa = $_GET["pesquisa"];
  $produto = select_sql_unico("SELECT * FROM produtos_papelaria_2024 WHERE id = ? LIMIT 1", [$pesquisa]);

  if(!$produto){
    $erro = "Produto" . $pesquisa . " não encontrado";
  }
}


require_once "components/header.php";
require_once "views/pesquisar_view.php";
require_once "components/footer.php";

?>