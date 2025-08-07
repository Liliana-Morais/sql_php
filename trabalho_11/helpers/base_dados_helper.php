<?php


$base_dados = [
  "host" => "localhost",
  "dbname" => "codemaster_bd",
  "user" => "root",
  "pass" => "",
];

$pdo = new PDO("mysql:host=$base_dados[host];dbname=$base_dados[dbname];charset=utf8mb4;", $base_dados["user"],  $base_dados["pass"]);

function select_sql($sql, $valores = []){
  global $pdo;
  $consulta = $pdo->prepare($sql);
  $consulta->execute($valores);
  $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
  return $resultado;
}

function select_sql_unico($sql, $valores = []){
  global $pdo;
  $consulta = $pdo->prepare($sql);
  $consulta->execute($valores);
  $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
  return $resultado;
}

function idu_sql($sql, $valores = []){
  global $pdo;
  $consulta = $pdo->prepare($sql);
  $resultado = $consulta->execute($valores);
  return $resultado;
}


?>