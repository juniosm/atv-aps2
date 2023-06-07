<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fichas | URCA</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>
  <header class="header-bg">
    <div class="header container">
      <img src="<?php echo base_url(); ?>assets/imgs/logo.png" alt="">
      <ul class="menu-header">
        <li><a href="#">URCA</a></li>
        <li>CURSOS</li>
        <li>SOBRE</li>
      </ul>
    </div>
  </header>

  <main>
    <?php $this->renderSection("content"); ?>
  </main>

  <footer class="footer">
    <div class="container footer-grid">
      <div>
        <h4>URCA.BR</h4>
      </div>
      <div>
        <h4>Universidade regional do cariri</h4>
        <p>CNPJ - 067.740.864/0001-26</p>
        <p>Rua Ali Perto, 42 - Botafogo
          Rio de Janeiro - RJ</p>
      </div>
      <div>
        <h4>Horário de atendimento</h4>
        <p>De Seg. à Sex. 08:00HS às 17:00HS </p>
        <p>(88)3102.1212/1204</p>
      </div>
    </div>
  </footer>

</body>

</html>