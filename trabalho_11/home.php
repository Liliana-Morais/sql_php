<?php

require_once "requisitos.php";


$colaborador = verificar_logado();


require_once "components/header.php";
require_once "views/home_view.php";
require_once "components/footer.php";

?>