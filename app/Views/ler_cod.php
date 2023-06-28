<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adm-fichas</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>
  <section class="container ler-cod">
    <form name="form" action=" <?php echo site_url('fichastore') ?> " method="post" class="form">
      <div>
        <label for="cod">Codigo de leitura</label>
        <input class="input" name="cod" id="code" type="text" autofocus>
      </div>
      <div id="resposta"></div>
    </form>
  </section>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script>
    $('[name = form]').submit(function() {

      event.preventDefault();
      var cod = $('[name=cod]').val();
      $.ajax({
        type: 'post',
        url: '<?php echo site_url('fichastore'); ?>',
        dataType: 'json',
        data: {
          cod: cod
        },
        beforeSend: function() {

          $("#resposta").html('<div class="small">Consultando..</div>');

          $('[name = cod]').val('');
        },
        success: function(response) {

          if (!response.erro) {

            $("#resposta").html(response.certo);
            localStorage.setItem("valor", response.certo);
          } else {
            /* Tem erros de validação */

            $("#resposta").html(response.erro);

          }

        },
      });

    });
  </script>


</body>


</html>