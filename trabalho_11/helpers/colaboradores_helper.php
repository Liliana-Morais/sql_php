<?php


session_start();

function fazer_login($login, $password){
  $colaborador = select_sql_unico("SELECT * FROM colaboradores_papelaria_2024 WHERE login = ?", [$login]);

  if($colaborador && password_verify($password, $colaborador["password"])){
    $_SESSION["colaborador"] = $colaborador;
    return true;
  }
  else{
    return false;
  }
}

function verificar_logado(){
  if(!empty($_SESSION["colaborador"])){
    return $_SESSION["colaborador"];
  }
  else{
    header("Location: index.php");
    exit;
  }
}

function logout(){
  session_destroy();
  header("Location: index.php");
  exit;
}

?>