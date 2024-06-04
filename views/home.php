<?php

use Project\Entity\Product;

define('PAGE_TITLE', 'Create Product');

require_once __DIR__ . '/header.php';

?>

<link rel="stylesheet" href="https://unpkg.com/modern-normalize">
<link rel="stylesheet" href="css/home.css">

<body>
    <main>
      <div class="title-container">
          <img src="images/minus-big-symbol.png" alt=""><span></span>
          <h1>Cadastre seu produto</h1>
          <span></span><img src="images/minus-big-symbol.png" alt="">
      </div>

      <form action="index.php?action=create_product" method="post">
          <label>Nome do produto:</label>
              <input type="text" name="product_name" required>
              <label>Preço do produto:</label>
              <input type="number" name="product_price" required>
              <label>Quantidade do produto:</label>
              <input type="number" name="product_quantity" required>
              <label>Imagem do produto:</label>
              <input type="file" name="product_image" accept="image/*" required>
              <label>Descrição do produto:</label>
              <textarea id="produto_descricao" name="product_description" rows="4" required></textarea>
              <div class="enviar">
                  <button type="submit">Enviar</button>
              </div>
      </form>
      <div class="product-category">
        <img src="images/minus-big-symbol.png" alt=""><span></span>
          <h2>Produtos Adicionados</h2>
              <!-- arrumar o php por aqui, onde aparece os produtos cadastradossss -->
          <span></span><img src="images/minus-big-symbol.png" alt="">
      </div>
      <table border="1">
          <tr>
              <th width="200">Product Name</th>
              <th width="200">Product Description</th>
              <th width="200">Product Price</th>
              <th width="200">Product Quantity</th>
              <th width="200">Update</th>
              <th width="200">Delete</th>
          </tr>
          <?php
          /** @var Product $products */
          ?>
          <?php foreach ($products as $product) : ?>
              <tr>
                  <td align="center"><?= $product->product_name() ?></td>
                  <td align="center"><?= $product->product_description() ?></td>
                  <td align="center"><?= "$" . $product->product_price() ?></td>
                  <td align="center"><?= $product->product_quantity() ?></td>
                  <td align="center">
                      <?=
                      "<a href='index.php?action=update&id={$product->id()}'>Update</a>";
                      ?>
                  </td>
                  <td align="center">
                      <?=
                      "<a href='index.php?action=delete&id={$product->id()}'>Delete</a>";
                      ?>
                  </td>
              </tr>
          <?php endforeach; ?>
      </table>
    </main>
</body>

<?php

require_once __DIR__ . '/footer.php'

?>