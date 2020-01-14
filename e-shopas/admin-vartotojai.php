<?php
 include('header.php') ;
?>
<a class="btn bg-dark text-white m-2" href="admin.php"> < Atgal </a>
<div class="row ">
  <div class="col d-flex justify-content-center">
    <h1>Vartotojai</h1>
  </div>
</div>

<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr class="bg-dark text-white">
          <th scope="col">#</th>
          <th scope="col">Vardas</th>
          <th scope="col">Pavarde</th>
          <th scope="col">E. Pastas</th>
          <th scope="col">Adresas</th>
          <th scope="col">Miestas</th>
          <th scope="col">Pasto Kodas</th>
          <th scope="col">Valstybe</th>
          <th scope="col">Tel. numeris</th>
          <th scope="col">Lygis</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        $VisiVartotojai = getVartotojai();
        while ($var = mysqli_fetch_assoc($VisiVartotojai)) {?>
          <form class="" action="admin-editvartotojas.php" method="post">
            <input type="hidden" style="width: 100%" type="text" name="id" value="<?php echo $var['ID'] ?>">
            <tr style="font-size: 12px">
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo $var['vardas'] ?></td>
              <td><?php echo $var['pavarde'] ?></td>
              <td><?php echo $var['pastas'] ?></td>
              <td><?php echo $var['adresas'] ?></td>
              <td><?php echo $var['miestas'] ?></td>
              <td><?php echo $var['PastoKodas'] ?></td>
              <td><?php echo $var['salis'] ?></td>
              <td><?php echo $var['telNumeris'] ?></td>
              <td><?php echo $var['level'] ?></td>
              <td> <button class="btn bg-dark text-white" type="submit" name="button"> Edit</button> </td>
            </form>
              <td> <a class="btn bg-warning text-white" href="controler/deletevartotojas.php?id=<?php echo $var['ID'] ?>">Remove</a> </td>
            </tr>
        <?php } //BAIGESI WHILE MASYVAS ?>
      </table>
  </div>
</div>






<?php include('footer.php') ?>
