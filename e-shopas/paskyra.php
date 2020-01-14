<?php
include('header.php');
$vartotojas = getVartotojas($user['ID']);
 ?>

 <h1>Paskyros Informacija</h1>
 <div class="container row">
  <div class="col-8 border p-4">
        <h5 for="">Vardas: <?php echo $vartotojas['vardas'] ?></h5>
        <h5 for="">Pavarde: <?php echo $vartotojas['pavarde'] ?></h5>
        <h5 for="">Elektroninis pastas: <?php echo $vartotojas['pastas'] ?></h5>
        <h5 for="">Adresas: <?php echo $vartotojas['adresas'] ?></h5>
        <h5 for="">Miestas: <?php echo $vartotojas['miestas'] ?></h5>
        <h5 for="">Pasto kodas: <?php echo $vartotojas['PastoKodas'] ?></h5>
        <h5 for="">Salis: <?php echo $vartotojas['salis'] ?></h5>
        <h5 for="">Telefono numeris: <?php echo $vartotojas['telNumeris'] ?></h5>
  </div>
  <div class="col">
        <h5>Redaguoti savo paskyra</h5>
        <a class="btn bg-dark text-white" href="editVartotojas.php">Redaguoti</a>
  </div>
</div>



<?php include('footer.php'); ?>
