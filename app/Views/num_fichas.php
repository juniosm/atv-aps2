<div class="num-fichas">
  <h1>Fichas</h1>
  <?php if (!isset($_SESSION['ficha'])) : ?>
    <p><?php echo session()->get("user")->num_fichas ?></p>
  <?php else : ?>
    <p id="valor"> </p>
  <?php endif; ?>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script>
    const detectChange = () => {
      window.addEventListener('storage', function(e) {
        if (e.storageArea === localStorage && e.key === 'valor') {
          valor = localStorage.getItem("valor");
          $('#valor').html(valor)
        }
      });
    }
    valor = localStorage.getItem("valor");
    $('#valor').html(valor)
    detectChange();
  </script>


</div>