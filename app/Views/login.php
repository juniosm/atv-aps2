<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="center">
      <div class="lg">
        <img src="<?php echo base_url(); ?>assets/imgs/logo.png" alt="">
        <p>Universidade Regional do Cariri</p>
      </div>
      <h1>Aluno Online</h1>

      <?php if (session()->has("message")) : ?>
        <span><?php echo session()->getFlashdata("message") ?></span>
      <?php endif ?>

      <form class="form" action=" <?php echo url_to('login.store') ?> " method="post" class="form">
        <div>
          <label for="email"></label>
          <input type="email" name="email" id="email" value="jansm@gmail.com" placeholder="email">
          <span><?php echo session()->getFlashdata('errors')['email'] ?? '' ?></span>
        </div>
        <div>
          <label for="password"></label>
          <input type="password" name="password" id="password" placeholder="Senha" value="12345">
          <span><?php echo session()->getFlashdata('errors')['password'] ?? '' ?></span>
        </div>
        <button class="button" type="submit">Enviar</button>
      </form>
      <span class="li-senha">Esqueceu a senha? Clique aqui</span>
    </div>
  </div>
</body>

</html>