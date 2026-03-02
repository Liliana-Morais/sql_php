<main class="container my-4">

  <div class="row">
    <div class="col-12 text-center mb-5 mt-4">
      <h1>Home</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-12 d-flex justify-content-center flex-wrap gap-4 text-center">

      <?php if(!empty($viagens)): ?>

        <?php foreach($viagens as $i => $v): ?>
      
          <div class="card" style="width: 18rem;">
            <a href="viagem.php?posicao=<?= $i ?>">
              <img src="<?= $v->imagem ?>" class="card-img-top" alt="<?= $v->titulo ?>">
            </a>
              <div class="card-body">
                <h4 class="text-center"><?= $v->titulo ?></h4>
                <p class="card-text"><?= substr(strip_tags($v->texto), 0, 75) ?> ...</p>
              </div>
          </div>

        <?php endforeach ?>

      <?php endif ?>

    </div>
  </div>

</main>