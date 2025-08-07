<?php 

require_once "requisitos.php"; 

$colaborador = verificar_logado();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Papelaria 2024</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="public/css/style.css">

</head>
<body>

<header class="container-fluid header">

  <div class="row">
    <div class="col-12 p-0">

      <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm rounded m-3 px-4">
        <div class="container-fluid">
          <h1>Sistema da Papelaria 2024</h1>

          <div class="collapse navbar-collapse justify-content-between text-uppercase" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="listar.php">Listar Produtos</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Pesquisar Código</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Cadastrar Produto</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Editar Produto</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Deletar Produto</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Registar Vendas</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php">Sair</a></li>
            </ul>

            <div class="d-flex align-items-center">
              <a href="logout.php" class="btn btn-outline-danger btn-sm">Sair</a>
            </div>
          </div>
        </div>
      </nav>

    </div>
  </div>

</header>