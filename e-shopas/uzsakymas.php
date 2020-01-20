<?php
 include('header.php');
 $vartotojas = $_SESSION['user'];
 ?>

<div class="row">
  <div class="col d-flex justify-content-center">
    <h1>Užsakymas</h1>
  </div>
</div>
<form class="" action="controler/uzsakymoivygdymas.php" method="post">

<!-- ---------------------------------- UZSAKYMO DUOMENYS -------------------------------------------- -->
<?php if (isset($user)) {
  $vartotojas = $_SESSION['user'];?>
<div class="row border mr-2 ml-2 mb-2 p-3">
  <div class="col">
    <div class="row">
      <div class="col-3">
        <label for="">Vardas : </label>
      </div>
      <div class="col">
        <input style="width: 100%" type="text" name="vardas" value="<?php echo $vartotojas['vardas'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="">Pavarde : </label>
      </div>
      <div class="col">
        <input style="width: 100%" type="text" name="pavarde" value="<?php echo $vartotojas['pavarde'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="">Elektroninis pastas : </label>
      </div>
      <div class="col">
        <input style="width: 100%" type="text" name="epastas" value="<?php echo $vartotojas['pastas'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="">Adresas : </label>
      </div>
      <div class="col">
        <input style="width: 100%" type="text" name="adresas" value="<?php echo $vartotojas['adresas'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="">Miestas : </label>
      </div>
      <div class="col">
        <input style="width: 100%" type="text" name="miestas" value="<?php echo $vartotojas['miestas'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="">Pasto Kodas : </label>
      </div>
      <div class="col">
        <input style="width: 100%" type="text" name="pastokodas" value="<?php echo $vartotojas['PastoKodas'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="">Salis : </label>
      </div>
      <div class="col">
        <input style="width: 100%" type="text" name="salis" value="<?php echo $vartotojas['salis'] ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-3">
        <label for="">Telefono nr. : </label>
      </div>
      <div class="col">
        <input style="width: 100%" type="text" name="telnr" value="<?php echo $vartotojas['telNumeris'] ?>">
      </div>
    </div>
  </div>
</div>
<?php } else { ?>
  <div class="row border mr-2 ml-2 mb-2 p-3">
    <div class="col">
      <div class="row">
        <div class="col-3">
          <label for="">Vardas : </label>
        </div>
        <div class="col">
          <input style="width: 100%" type="text" name="vardas" value="">
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <label for="">Pavarde : </label>
        </div>
        <div class="col">
          <input style="width: 100%" type="text" name="pavarde" value="">
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <label for="">Elektroninis pastas : </label>
        </div>
        <div class="col">
          <input style="width: 100%" type="text" name="epastas" value="">
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <label for="">Adresas : </label>
        </div>
        <div class="col">
          <input style="width: 100%" type="text" name="adresas" value="">
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <label for="">Miestas : </label>
        </div>
        <div class="col">
          <input style="width: 100%" type="text" name="miestas" value="">
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <label for="">Pasto Kodas : </label>
        </div>
        <div class="col">
          <input style="width: 100%" type="text" name="pastokodas" value="">
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <label for="">Salis : </label>
        </div>
        <div class="col">
          <input style="width: 100%" type="text" name="salis" value="">
        </div>
      </div>
      <div class="row">
        <div class="col-3">
          <label for="">Telefono nr. : </label>
        </div>
        <div class="col">
          <input style="width: 100%" type="text" name="telnr" value="">
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<!-- ---------------------------------------------- UZSAKYMO DUOMENU PABAIGA ---------------------------- -->

<!-- ---------------------------------------------- ATSIEMIMO BUDAS -------------------------------------- -->
<div class="row">
  <div class="col d-flex justify-content-center">
    <h2>Atsiemimo budas</h2>
  </div>
</div>
<div class="row border mr-2 ml-2 mb-2 p-3">
  <div class="col checkbox">
    <div class="radio">
      <label><input type="radio" name="atsiemimas" value="Parduotuve" checked></label>
      <label for="atsiemimas">Atsiimti iš parduotuvės Kaune 0.00 &euro;</label>
    </div>
        <div class="radio">
          <label><input type="radio" name="atsiemimas" value="Kurjeris"></label>
          <label for="atsiemimas">Pristatyti į namus per kurjerių tarnybą  3.50 &euro;</label>
        </div>
  </div>
</div>
<!-- -------------------------------------- ATSIEMIMO BUDO PABAIGA ------------------------------------- -->

<!-- --------------------------------------PREKES ------------------------------------------------------ -->
<div class="row">
  <div class="col d-flex justify-content-center">
    <h2>Prekes</h2>
  </div>
</div>
<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr class="bg-dark text-white">
          <th scope="col">#</th>
          <th scope="col">Pavadinimas</th>
          <th scope="col">Kiekis</th>
          <th scope="col">Kaina</th>
          <th></th>
      </thead>
      <tbody>
        <?php
        $a = 1;
        $i = 0;
        $suma = 0;
        $kiekis = 0;
        while ($preke = $_SESSION['krepselis'][$i]) { ?>
            <tr style="font-size: 12px">
              <th scope="row "><?php echo $a++; ?></th>
              <td><?php echo $preke['pavadinimas']  ?></td>
              <td><?php echo $preke['kiekis'] ?></td>
              <td class="kaina<?php echo $i ?>"><?php echo $preke['kaina']*$preke['kiekis']  ?> &euro;</td>
            </tr>
        <?php
        $suma += $preke['kaina']*$preke['kiekis'];
        $kiekis += $preke['kiekis'];
        $i++;
        if ($i >= $count = count($_SESSION['krepselis'])) {
          break;
        }
        if (!isset($_SESSION['krepselis'][$i])) {
          $i++;
        }
      } //BAIGESI WHILE MASYVAS ?>
            <tr class="bg-dark text-white">
                <td colspan="2" align="right"><strong>Pristatymas:</strong></td>
                <td align="" colspan="1"></td>
                <td id='siuntimas' align="" colspan="1">0.00 &euro;</td>
                <td></td>

          </tr>
            <tr class="bg-dark text-white">
                <td colspan="2" align="right"><strong>Viso:</strong></td>
                <td id="visokiekis"  align="" colspan="1"><?php echo $kiekis ?></td>
                <td id="visokaina" align="" colspan=""  ><strong><?php echo $suma ?> &euro;</strong></td>
                <td></td>

          </tr>
      </table>
      <div class="row">
        <div class="col d-flex justify-content-end m-2">
          <button class="btn btn-dark" type="submit" name="button">UZSAKYTI</button>
        </div>
      </div>
      </form>


<?php include('footer.php') ?>
