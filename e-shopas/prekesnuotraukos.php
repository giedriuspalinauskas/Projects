<?php
 include('header.php') ;
?>
<a class="btn bg-dark text-white m-2" href="admin-prekes.php"> < Atgal </a>
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
        $preke = getPreke($_GET['id']);
         ?>
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
            </tr>
      </table>
      <div class="row ">
        <div class="col d-flex justify-content-center">
          <h1>Nuotraukos</h1>
        </div>
      </div>
      <div class="row">
        <?php
        $nuotraukos = getImgsByPreke($_GET['id']);
        while($nuotrauka = mysqli_fetch_assoc($nuotraukos)){ ?>
        <div class="col-4">
          <form class="" action="controler/deleteImg.php" method="post">
            <img src="img/lg<?php echo $nuotrauka['pavadinimas'] ?>" alt="">
            <input type="hidden" type="text" name="id" value="<?php echo $nuotrauka['ID'] ?>">
            <button class="btn btn-sm bg-warning text-white m-2" type="submit" name="button"> Delete</button>
        </form>
        </div>
        <?php
      } //WHILE MASYVO PABAIGA !
      ?>
      </div>
  </div>
</div>






<?php include('footer.php');
?>
