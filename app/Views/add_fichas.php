<?php $this->extend("base_view") ?>
<?php $this->section('content'); ?>
<section class=" container fichas">
  <?php echo view("sections/intro") ?>

  <div class="grid-ficha list-menu-fichas">
    <div>
      <h1 class="title-central">Adicionar Fichas</h1>
      <button class="button" name="button">Adicionar</button>
    </div>
    <div class="num-fichas">
      <h1>Fichas</h1>
      <p id="resposta"><?php echo session()->get('ficha') ?></p>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
      $('[name = button').on('click', function() {
        var id = <?php echo $_SESSION["user"]->id ?>;
        $.ajax({
          type: 'post',
          url: '<?php echo site_url('fichastores'); ?>',
          dataType: 'json',
          data: {
            id: id
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
  </div>
</section>
<?php $this->endSection(); ?>