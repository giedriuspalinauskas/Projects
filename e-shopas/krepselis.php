<?php include('header.php') ?>

<div class="row ">
  <div class="col d-flex justify-content-center">
    <h1>Krepselis</h1>
  </div>
</div>

<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr class="bg-dark text-white">
          <th scope="col">#</th>
          <th scope="col"></th>
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
              <input class="index" type="hidden" style="width: 100%" type="text" name="id" value="<?php echo $i ?>">
              <td><img src="img/sm<?php echo $preke['nuotrauka'] ?>" alt=""> </td>
              <td><?php echo $preke['pavadinimas']  ?></td>
              <td><input class="text-center krepselio_kiekis" style="height: 40px; font-size: 20px"  type="number" name="kiekis" value="<?php echo $preke['kiekis'] ?>" min="1" max="10"></td>
              <td class="kaina<?php echo $i ?>"><?php echo $preke['kaina']*$preke['kiekis']  ?> &euro;</td>
              <td> <a class="btn btn-sm bg-warning text-white" href="controler/deletekrepseliopreke.php?index=<?php echo $i ?>">Remove</a> </td>
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
                <td></td>
                <td colspan="2" align="right"><strong>Viso:</strong></td>
                <td id="visokiekis"  align="" colspan="1"><?php echo $kiekis ?></td>
                <td id="visokaina" align="" colspan="1"><strong><?php echo $suma ?> &euro;</strong></td>
                <td></td>

          </tr>
      </table>

  </div>
</div>

<?php include('footer.php') ?>
