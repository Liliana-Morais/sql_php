<?php

$form = !empty($_GET["termo"]);
if($form){
  $termo = $_GET["termo"];
  $resultado = fazer_pesquisa($termo);
}

?>

<main class="container my-4">

  <div class="row">
    <div class="col-12 text-center mb-4 mt-4">
      <h1>Pesquisa</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-12 d-flex justify-content-center flex-wrap gap-4 text-center">

      <?php if(!empty($resultado)): ?>

        <?php foreach($resultado as $i => $r): ?>

          <?php $v = $r["viagem"] ?>
      
          <div class="card" style="width: 18rem;">
            <a href="viagem.php?posicao=<?= $r["posicao_original"] ?>" class="btn">
              <img src="<?= $v->imagem ?>" class="card-img-top" alt="<?= $v->titulo ?>">
            </a>
            <div class="card-body">
              <h4 class="card-title"><?= $v->titulo ?></h4>
              <p class="card-text"><?= substr(strip_tags($v->texto), 0, 75) ?>...</p>
            </div>
          </div>

        <?php endforeach ?>

      <?php else: ?>

        <h4 class="mt-3 mb-5">Nenhum resultado encontrado.</h4>

      <?php endif ?>

    </div>
  </div>

</main>