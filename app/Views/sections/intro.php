<section>
  <div class="info-user">
    <h1><span>Bem-vindo</span> <?php echo session()->get('user')->nome . " " . session()->get('user')->sobrenome; ?></h1>
    <img src="<?php echo base_url(); ?>assets/imgs/eating-food.svg" alt="">
  </div>
</section>