<div class="num-fichas">
  <h1>Fichas</h1>
  <?php if (!isset($_SESSION['ficha'])) : ?>
    <p><?php echo session()->get("user")->num_fichas ?></p>
  <?php else : ?>
    <p><?php echo session()->get("ficha"); ?></p>
  <?php endif; ?>


</div>