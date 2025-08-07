<main class="caixa">>

  <h2 class="text-uppercase caixa">Pesquisar</h2>

  <form action="">
    <input type="text" name="pesquisa" value="<?= $pesquisa ?>" placeholder="Código" minlength="1" autofocus required>
    
    <br><br>
    
    <input type="submit" value="Pesquisar">

    <br><br>

    <?php if(!empty($erro)): ?>
      <p class="text-uppercase"><?= $erro ?></p>
    <?php endif ?>

    <?php if($form): ?>
      <a href="pesquisar.php">
        <button type="button">Reset</button>
      </a>
    <?php endif ?>
  </form>

  <table>
    <tr>
      <th class="<?= get_classe("id", $coluna, $ordem) ?>">ID</th>
      <th class="<?= get_classe("nome", $coluna, $ordem) ?>">NOME</th>
      <th class="<?= get_classe("preco", $coluna, $ordem) ?>">PREÇO</th>
      <th class="<?= get_classe("quantidade", $coluna, $ordem) ?>">QUANTIDADE</th>
    </tr>

    <?php foreach($produto as $p): ?>

      <tr>
        <td><?= $p["id"] ?></td>
        <td><?= $p["nome"] ?></td>
        <td><?= number_format($p["preco"], 2, '.') ?></td>
        <td><?= $p["quantidade"] ?></td>
      </tr>

    <?php endforeach ?>
  </table>

</main>