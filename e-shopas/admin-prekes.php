<?php
 include('header.php') ;
?>
<a class="btn bg-dark text-white m-2" href="admin.php"> < Atgal </a>
<a class="btn bg-primary text-white m-2" href="admin-newpreke.php"> + Prideti Nauja preke </a>
<div class="row ">
  <div class="col d-flex justify-content-center">
    <h1>Prekes</h1>
  </div>
</div>

<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr class="bg-dark text-white">
          <th scope="col">#</th>
          <th scope="col">Pavadinimas</th>
          <th scope="col">Antraste</th>
          <th scope="col">Nuolaida</th>
          <th scope="col">Prekes įdejimo data</th>
          <th scope="col">Kiekis</th>
          <th scope="col">Pozicija</th>
          <th scope="col">Kategorija</th>
          <th scope="col">Lytis</th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        $i = 1;
        $VisosPrekes = getPrekes();
        while ($preke = mysqli_fetch_assoc($VisosPrekes)) {?>
          <form class="" action="admin-editpreke.php" method="post">
            <input type="hidden" style="width: 100%" type="text" name="id" value="<?php echo $preke['ID'] ?>">
            <tr style="font-size: 12px">
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo $preke['pavadinimas']  ?></td>
              <td><?php echo $preke['antraste']  ?></td>
              <td><?php echo $preke['nuolaida']  ?></td>
              <td><?php echo $preke['data']  ?></td>
              <td><?php echo $preke['kiekis']  ?></td>
              <td><?php echo $preke['pozicija']  ?></td>
              <td><?php echo $preke['kategorija']  ?></td>
              <td><?php echo $preke['lytis']?></td>
              <td> <button class="btn btn-sm bg-dark text-white" type="submit" name="button"> Edit</button> </td>
            </form>
              <td> <a class="btn btn-sm bg-warning text-white" href="controler/deletevartotojas.php?id=<?php echo $preke['ID'] ?>">Remove</a> </td>
              <td> <a class="btn btn-sm bg-primary text-white" href="addimg.php?id=<?php echo $preke['ID'] ?>">+ Nuotrauka</a> </td>
              <td> <a class="btn btn-sm bg-dark text-white" href="controler/addimg.php?id=<?php echo $preke['ID'] ?>">Nuotraukos</a> </td>
            </tr>
        <?php } //BAIGESI WHILE MASYVAS ?>
      </table>
  </div>
</div>






<?php include('footer.php');
?>
