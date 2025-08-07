<?php

$passwords = [
  "admin" => "codemaster",
  "maria" => "praia",
  "joao" => "nuvem"
];

foreach ($passwords as $login => $password) {
  $hash = password_hash($password, PASSWORD_DEFAULT);
  echo "Login: $login --> Password: $password --> Hash: $hash <br>";
}


?>