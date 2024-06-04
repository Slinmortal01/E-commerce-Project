<?php

use Project\Entity\Product;

define('PAGE_TITLE', 'Create Product');

require_once __DIR__ . '/header.php';

?>

<link rel="stylesheet" href="https://unpkg.com/modern-normalize">
<link rel="stylesheet" href="css/register.css">

<body>
  <main>

    <div class="image-container">
      <img src="images/desenholoja.png" alt="desenhoLoja">
    </div>

    <div class="register-container">
      <h1>Acesse sua conta</h1>
      <form>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <label for="password">Senha:</label>
        <input type="password" id="password" name="password">
        <span>
          <input type="checkbox" name="remember" id="remember">
          <label for="remember">Lembre-se</label>
        </span>
        <button type="submit">Entrar</button>
      </form>
      <a href="#">Esqueci minha senha</a>

      <div class="orOptions">
        <img src="images/minus-big-symbol.png" alt="linha"><span></span>
        <p>OU</p>
        <span></span><img src="images/minus-big-symbol.png" alt="linha">
      </div>

      <div class="options">
        <div>
          <img src="images/google.png" alt="googleIcon">
          <a href="#"><span>Google</span></a>
        </div>
        <div>
          <a href="#"><span>Cadastre-se</span></a>
        </div>
      </div>

    </div>
  </main>
</body>

<?php

require_once __DIR__ . '/footer.php'

?>