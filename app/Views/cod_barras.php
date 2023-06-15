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
      <h1>Codigo de barras</h1>
      <div>
        <?php echo '<img src="data:image/png;base64,' . $img_base64 . '">'; ?>
      </div>
    </div>
    <?php echo view("sections/num_fichas") ?>

  </div>
</section>
<?php $this->endSection(); ?>