<?php
require_once __DIR__ . '/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
<main class="cart-container-main">
    <div class="cart-container">
        <h1>Carrinho de Compras</h1>
    
        <div class="grid-container-cart">
            <div class="grid-item-cart grid-header-cart">ID do Produto</div>
            <div class="grid-item-cart grid-header-cart">Nome do Produto</div>
            <div class="grid-item-cart grid-header-cart">Descrição do Produto</div>
            <div class="grid-item-cart grid-header-cart">Preço do Produto</div>
            <div class="grid-item-cart grid-header-cart">Quantidade de Produto</div>
            <div class="grid-item-cart grid-header-cart">Ações</div>
    
    
                <div class="grid-item-cart">1</div>
                <div class="grid-item-cart">Rato de borracha</div>
                <div class="grid-item-cart" style="text-align: left; padding-left: 10px;">bem borrachudo</div>
                <div class="grid-item-cart">$129,99</div>
                <div class="grid-item-cart">3</div>
                <div class="grid-item-cart">
                    <div class="actions-buttons">
                        <a class="btn-update" href="index.php?action=UpdateCart&id=1>&quantity=3">Atualizar</a>
                        <a class="btn-delete" href="index.php?action=DeleteFromCart&id=1">Deletar</a>
                    </div>
                </div>
    
                <div class="grid-item-cart">2</div>
                <div class="grid-item-cart">Cachorro empanado</div>
                <div class="grid-item-cart" style="text-align: left; padding-left: 10px;">muito nojento</div>
                <div class="grid-item-cart">$2000,99</div>
                <div class="grid-item-cart">42</div>
                <div class="grid-item-cart">
                    <div class="actions-buttons">
                        <a class="btn-update" href="index.php?action=UpdateCart&id=1>&quantity=3">Atualizar</a>
                        <a class="btn-delete" href="index.php?action=DeleteFromCart&id=1">Deletar</a>
                    </div>
                </div>
    
                <div class="grid-item-cart">3</div>
                <div class="grid-item-cart">Toalha envelhecida</div>
                <div class="grid-item-cart" style="text-align: left; padding-left: 10px;">existe a muitas eras</div>
                <div class="grid-item-cart">$1,99</div>
                <div class="grid-item-cart">11</div>
                <div class="grid-item-cart">
                    <div class="actions-buttons">
                        <a class="btn-update" href="index.php?action=UpdateCart&id=1>&quantity=3">Atualizar</a>
                        <a class="btn-delete" href="index.php?action=DeleteFromCart&id=1">Deletar</a>
                    </div>
                </div>
    
        </div>
    
        <div class="cart-actions">
    
                <!-- <p><i>Carrinho vazio, não pode prosseguir com a compra, adicione um produto ao carrinho e tente novamente!</i></p> -->
    
                <button type="submit">Realizar Pagamento</button>
    
        </div>
    </div>
    
    </body>
</main>
</html>

<?php require_once __DIR__ . '/footer.php'; ?>
