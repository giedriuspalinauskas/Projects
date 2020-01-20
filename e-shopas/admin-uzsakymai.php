<?php include('header.php') ?>

<div class="row">
  <div class="col d-flex justify-content-center">
    <h1>Tavo uzsakymai</h1>
  </div>
</div>

<table class="table">
  <thead>
    <tr class="bg-dark text-white">
      <th scope="col">Uzsakymo nr.</th>
      <th scope="col">Vardas</th>
      <th scope="col">Pavarde</th>
      <th scope="col">El. Pastas</th>
      <th scope="col">Telefono nr.</th>
      <th scope="col">Prekes</th>
      <th scope="col">Atsiemimo budas</th>
      <th scope="col">Kaina</th>
      <th></th>
  </thead>
  <?php
  $uzsakymai = getUzsakymai();
  while ($uzsakymas = mysqli_fetch_assoc($uzsakymai)) {  ?>
  <tbody>
        <tr style="font-size: 12px">
          <th scope="row "><?php echo $uzsakymas['ID']; ?></th>
          <td> <?php echo $uzsakymas['vardas'] ?></td>
          <td> <?php echo $uzsakymas['pavarde'] ?></td>
          <td> <?php echo $uzsakymas['epastas'] ?></td>
          <td> <?php echo $uzsakymas['adresas'] ?></td>
          <td>
            <?php
            $uzsakymoPrekes = getUzsakymoPrekeByUzsakymoID($uzsakymas['ID']);
            $i = 1;
            while ($uzsakymopreke = mysqli_fetch_assoc($uzsakymoPrekes)) {
              $preke = getPreke($uzsakymopreke['prekes_id']);
              ?>
              <a href="prekes-template.php?id=<?php echo $uzsakymopreke['prekes_id'] ?>"><?php echo $i.". ".$preke['pavadinimas']." x".$uzsakymopreke['kiekis'] ?></a><br>
              <?php
              $i++;
            } ?>
           </td>
          <td> <?php echo $uzsakymas['atsiemimas'] ?></td>
          <td class="kaina"><?php echo $uzsakymas['suma'] ?> &euro;</td>
        </tr>
      <?php } ?>
  </table>
<a href="#"></a>

<?php include('footer.php') ?>
