<main class="container-fluid my-4">

  <div class="row text-uppercase">
    <div class="col-12 caixa">
      <h1>Sistema da papelaria 2024</h1>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-12 mt-3">

    <form action="" class="caixa" method="post" autocomplete="off">

        <h3 class="mb-4 text-uppercase">Login</h3>

        <?php if(!empty($erro)): ?>
          <br>
          <p class="text-danger"><?= $erro ?></p>
        <?php endif ?>

        <br>

        <input type="text" name="nome" placeholder="Nome" autofocus required>
        <br><br>
        <input type="password" name="senha" placeholder="Senha" required>
        <br><br>
        <input type="submit" value="Entrar">
        
      </form>

    </div>
  </div>

</main>