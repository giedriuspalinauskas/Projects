<?php
include('header.php');
$vartotojas = getVartotojas($_POST['id']);
 ?>
<a class="btn bg-dark text-white m-2" href="admin-vartotojai.php"> < Atgal </a>
 <h1>Redaguoti</h1>
 <div class="container row">
  <div class="col-12 border p-4">
    <form class="" action="controler\editVartotojas-controler.php?x='true'" method="post">
      <div class="row">
        <div class="col-3">
          <h5 for="">Vardas: </h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="vardas" value="<?php echo $vartotojas['vardas'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">Pavarde: </h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="pavarde" value="<?php echo $vartotojas['pavarde'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">Elektroninis pastas: </h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="mail" value="<?php echo $vartotojas['pastas'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">Adresas: </h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="adresas" value="<?php echo $vartotojas['adresas'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">Miestas: </h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="miestas" value="<?php echo $vartotojas['miestas'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">Pasto kodas: </h5>
        </div>
        <div class="col mt-2">
          <input class="p-2" style="width: 100%" type="text" name="pkodas" value="<?php echo $vartotojas['PastoKodas'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">Salis:</h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="salis" value="<?php echo $vartotojas['salis'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">Telefono numeris:</h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="telNumeris" value="<?php echo $vartotojas['telNumeris'] ?>">
          <input type="hidden" style="width: 100%" type="text" name="id" value="<?php echo $vartotojas['ID'] ?>">
          <input type="hidden" style="width: 100%" type="text" name="slaptazodis" value="<?php echo $vartotojas['slaptazodis'] ?>">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">Level:</h5>
        </div>
        <div class="col">
          <select name="level" value="" class="form-control">
            <option><?php echo $vartotojas['level'] ?></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
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
