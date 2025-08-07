<?php

require_once "requisitos.php";
require_once "components/header_index.php";


if(isset($_SESSION["colaborador"]) && !empty($_SESSION["colaborador"])){
  header("Location: home.php");
  exit;
}

$erro = "";

if(!empty($_POST["login"]) && !empty($_POST["password"])){
  $login = $_POST["login"];
  $password = $_POST["password"];

  if(fazer_login($login, $password)){
    header("Location: home.php");
    exit;
  }
  else{
    $erro = "Login inválido, tente novamente.";
  }
}


require_once "views/index_view.php";
require_once "components/footer.php";

?>