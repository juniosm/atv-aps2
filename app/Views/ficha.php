<?php $this->extend("base_view") ?>
<?php $this->section('content'); ?>
<section class=" container fichas">
  <?php echo view("sections/intro") ?>

  <div class="grid-ficha">
    <ul class='menu-fichas'>
      <li>
        <img src="<?php echo base_url(); ?>assets/imgs/icons/add.svg" alt="">
        <a href="<?php echo url_to('add_fichas') ?>">Adicionar Fichas</a>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>assets/imgs/icons/menu.svg" alt="">
        <a href="<?php echo url_to('menu') ?>">Menu Semanal</a>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>assets/imgs/icons/cod.svg" alt="">
        <a href="<?php echo url_to('cod_barras') ?>">Codigo de barras</a>
      </li>
    </ul>
    <div class="num-fichas">
      <h1>Fichas</h1>
      <p><?php echo session()->get('user')->num_fichas ?></p>
    </div>
  </div>

</section>
<?php $this->endSection(); ?>