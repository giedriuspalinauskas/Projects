<?php
include('header.php');
$preke = getPreke($_POST['id']);
 ?>
<a class="btn bg-dark text-white m-2" href="admin-prekes.php"> < Atgal </a>
 <h1>Redaguoti</h1>
 <div class="container row">
  <div class="col-12 border p-4">
    <form class="" action="controler\editpreke-controler.php" method="post">
      <div class="row">
        <div class="col-3">
          <h5 for="">pavadinimas: </h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="pavadinimas" value="<?php echo $preke['pavadinimas'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">antraste: </h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="antraste" value="<?php echo $preke['antraste'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">nuolaida: </h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="nuolaida" value="<?php echo $preke['nuolaida'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">

        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="hidden" name="data" value="<?php echo $preke['data'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">kiekis: </h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="kiekis" value="<?php echo $preke['kiekis'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">pozicija: </h5>
        </div>
        <div class="col mt-2">
          <input class="p-2" style="width: 100%" type="text" name="pozicija" value="<?php echo $preke['pozicija'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">kategorija:</h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="kategorija" value="<?php echo $preke['kategorija'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">lytis:</h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="lytis" value="<?php echo $preke['lytis'] ?>">
          <input type="hidden" style="width: 100%" type="text" name="id" value="<?php echo $preke['ID'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col d-flex justify-content-end mr-2 mt-2">
          <button class="btn bg-dark text-white" type="submit" name="button"> Redaguoti </button>
        </div>
      </div>
    </form>
  </div>
</div>


<?php include('footer.php'); ?>
