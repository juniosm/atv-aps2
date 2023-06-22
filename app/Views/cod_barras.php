<?php
$cod = session()->get('user')->cod_barra;
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
$bar_code   = $generator->getBarcode($cod, $generator::TYPE_CODE_128, 4, 100);
$img_base64 = base64_encode($bar_code);

?>

<?php $this->extend("base_view") ?>
<?php $this->section('content'); ?>
<section class=" container ">
  <?php echo view("sections/intro") ?>
  <div class="grid-ficha list-menu-fichas">
    <div class="cod-bar">
      <div class="imp">
        <h1>Codigo de barras</h1>
        <button class="imprimir" onclick="openModal()"></button>
      </div>
      <?php echo '<img src="data:image/png;base64,' . $img_base64 . '">'; ?>
    </div>
    <?php echo view("num_fichas") ?>
    <div class="wrapper-modal">
      <?php echo view("sections/modal", $s = ["img" => $img_base64]) ?>
    </div>
    <script>
      const modal = document.querySelector(".wrapper-modal");
      const fechar = document.querySelector(".fechar-modal")
      const openModal = () => {
        modal.classList.add('active')
      }

      fechar.addEventListener('click', () => {
        modal.classList.remove('active')
      })
    </script>


  </div>
</section>
<?php $this->endSection(); ?>