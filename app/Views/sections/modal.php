  <div class="container-modal">
    <div class="modal">
      <div class="foto-user">
        <img src="<?php echo base_url(); ?>assets/imgs/user.png" alt=" foto do usuario">
      </div>
      <h4><?php echo session()->get('user')->nome . " " . session()->get('user')->sobrenome; ?></h4>
      <?php echo '<img src="data:image/png;base64,' . $img . '">'; ?>
    </div>
    <button class="imprimir" onclick="window.print()"></button>
    <p class="fechar-modal">X</p>
  </div>