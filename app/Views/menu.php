<?php $this->extend("base_view") ?>
<?php $this->section('content'); ?>
<section class=" container fichas">
  <?php echo view("sections/intro") ?>

  <div class='list-menu-fichas menu'>
    <h1 class='title-central'>Menu</h1>
    <table>
      <thead>
        <tr>
          <th>Segunda</th>
          <th>Terça</th>
          <th>Quarta</th>
          <th>Quinta</th>
          <th>Sexta</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Arroz</td>
          <td>Arroz</td>
          <td>Arroz</td>
          <td>Arroz</td>
          <td>Arroz</td>

        </tr>
        <tr>
          <td>Feijão </td>
          <td>Feijão </td>
          <td>Feijão </td>
          <td>Feijão </td>
          <td>Feijão </td>
        </tr>
        <tr>
          <td>Macarrão</td>
          <td>Macarrão</td>
          <td>Macarrão</td>
          <td>Macarrão</td>
          <td>Macarrão</td>
        </tr>
        <tr>
          <td>Salada</td>
          <td>Salada</td>
          <td>Salada</td>
          <td>Salada</td>
          <td>Salada</td>
        </tr>
      </tbody>
    </table>
  </div>

</section>
<?php $this->endSection(); ?>