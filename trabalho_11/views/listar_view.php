<main class="container-fluid my-4">

  <h2 class="text-uppercase caixa">Ordem da lista</h2>

  <form action="" method="get">
    <label for="coluna">Coluna:</label>
    <select name="coluna" id="coluna" class="text-uppercase">
      <option value="id" <?= ($coluna == "id") ? "selected" : "" ?>>ID</option>
      <option value="nome" <?= ($coluna == "nome") ? "selected" : "" ?>>Nome</option>
      <option value="preco" <?= ($coluna == "preco") ? "selected" : "" ?>>Preço</option>
      <option value="quantidade" <?= ($coluna == "quantidade") ? "selected" : "" ?>>Quantidade</option>
    </select>

    <br><br>

    <label for="ordem">Ordenação:</label>
    <select name="ordem" id="ordem">
      <option value="ASC" <?= ($ordem == "ASC") ? "selected" : "" ?>>Ascendente</option>
      <option value="DESC" <?= ($ordem == "DESC") ? "selected" : "" ?>>Descendente</option>
    </select>

    <br><br>

    <input type="submit" value="Listar">

    <br><br>

    <?php if($form): ?>
      <a href="listar.php">
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

    <?php foreach($produtos as $p): ?>

      <tr>
        <td><?= $p["id"] ?></td>
        <td><?= $p["nome"] ?></td>
        <td><?= number_format($p["preco"], 2, '.') ?></td>
        <td><?= $p["quantidade"] ?></td>
      </tr>

    <?php endforeach ?>
  </table>

</main>