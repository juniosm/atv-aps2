<?php $this->extend('base_view'); ?>
<?php $this->section('content'); ?>
<section class="home">
  <div class="container">
    <div class="info-user">
      <h1><span>Bem-vindo</span>Nome e Sobrenome</h1>
      <img src="<?php echo base_url(); ?>assets/imgs/eating-food.svg" alt="">
    </div>
    <ul class="list-menu">
      <li>
        <img src="<?php echo base_url(); ?>assets/imgs/icons/time.svg" alt="">
        <p>Horariário Individual</p>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>assets/imgs/icons/calendario.svg" alt="">
        <p>Calendário Acadêmico</p>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>assets/imgs/icons/doc.svg" alt="">
        <p>Boletim</p>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>assets/imgs/icons/estagio.svg" alt="">
        <p>Estágio</p>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>assets/imgs/icons/arquivos.svg" alt="">
        <p>Material de aula</p>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>assets/imgs/icons/prancheta.svg" alt="">
        <p>Pedido de matrícula</p>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>assets/imgs/icons/boletim.svg" alt="">
        <p>Solicitar documento</p>
      </li>

      <li>
        <img src="<?php echo base_url(); ?>assets/imgs/icons/ficha.svg" alt="">
        <a href="">Fichas</a>
      </li>
    </ul>
  </div>
</section>

<?php $this->endSection(); ?>