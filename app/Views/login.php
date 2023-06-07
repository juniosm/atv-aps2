<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <div class="wrapper">
    <div class="center">
      <h1>Faça o Login</h1>

      <?php if (session()->has("message")) : ?>
        <span><?php echo session()->getFlashdata("message") ?></span>
      <?php endif ?>

      <form class="form" action=" <?php echo url_to('login.store') ?> " method="post" class="form">
        <div>
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" value="jansm@gmail.com">
          <span><?php echo session()->getFlashdata('errors')['email'] ?? '' ?></span>
        </div>
        <div>
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" value="12345">
          <span><?php echo session()->getFlashdata('errors')['password'] ?? '' ?></span>
        </div>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </div>
</body>

</html>