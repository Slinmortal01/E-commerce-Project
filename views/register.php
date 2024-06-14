<?php

use Project\Entity\Product;

define('PAGE_TITLE', 'Create Product');

require_once __DIR__ . '/header.php';

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main class="main-register">
        <form class="register-form">
            <h1>Faça seu Cadastro</h1>
            <div class="div-container">
                <div class="register-form-row-name">
                    <label for="name">Nome completo:</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="register-form-row">
                    <div>
                        <label for="cep">CEP:</label>
                        <input type="text" name="cep" id="cep">
                    </div>
                    <div>
                        <label for="uf">Estado:</label>
                        <input type="text" name="uf" id="uf">
                    </div>
                </div>
                <div class="register-form-row">
                    <div>
                        <label for="city">Cidade:</label>
                        <input type="text" name="city" id="city">
                    </div>
                    <div>
                        <label for="district">Bairro:</label>
                        <input type="text" name="district" id="district">
                    </div>
                </div>
                <div class="register-form-row">
                    <div>
                        <label for="street">Rua:</label>
                        <input type="text" name="street" id="street">
                    </div>
                    <div>
                        <label for="number">Nº:</label>
                        <input type="number" name="number" id="number">
                    </div>
                    <div>
                        <label for="complement">Complemento:</label>
                        <input type="text" name="complement" id="complement">
                    </div>
                </div>
                <img src="images/minus-big-symbol.png" alt="linha">
                <div class="register-form-row">
                    <div>
                        <label for="user">Usuario:</label>
                        <input type="text" name="user" id="user">
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email">
                    </div>
                </div>
                <div class="register-form-row">
                    <div>
                        <label for="password">Senha:</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div>
                        <label for="passwordConfirmation">Confirme sua senha:</label>
                        <input type="password" name="passwordConfirmation" id="passwordConfirmation">
                    </div>
                </div>
                <div class="register-form-row-radio">
                    <input type="radio" id="seller" name="role" value="seller" required>
                    <label for="seller">Vendedor</label>
                    <input type="radio" id="client" name="role" value="client" required>
                    <label for="client">Cliente</label>
                </div>
            </div>
            <button type="submit">Cadastrar</button>
        </form>
    </main>
</body>

<?php

require_once __DIR__ . '/footer.php'

?>
