<?php include('header.php') ?>

<?php
$kategorija =  $_GET['kategorija'];
$lytis = $_GET['lytis'];

function getPrekesByKatLyt($kategotija, $lytis){
    $ManoSql = "SELECT * FROM prekes WHERE (kategorija = '$kategotija') AND (lytis = '$lytis' OR lytis = 'vyr_mot')";
    $prekesObj = mysqli_query(getPrisijungimas(), $ManoSql);
    return $prekesObj;
}
function getPrekesByLyt($lytis){
    $ManoSql = "SELECT * FROM prekes WHERE lytis = '$lytis' OR lytis = 'vyr_mot'";
    $prekesObj = mysqli_query(getPrisijungimas(), $ManoSql);
    return $prekesObj;
}


//turi kategorija ir lyti
if ($kategorija !== "" && isset($lytis)) {
  $prekes = getPrekesByKatLyt($kategorija, $lytis);
  ?>
   <div class="row d-flex  ">
  <?php
  while ($preke = mysqli_fetch_assoc($prekes)) {
    $nuotrauka = getImg($preke['ID']);
    ?>
      <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8 mt-2 mb-2 ">
        <form class="preke" action="prekes-template.php" method="post">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/lg<?php echo $nuotrauka['pavadinimas']  ?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?php echo $preke['pavadinimas'] ?></h5>
              <p>Sandelyje yra: <?php echo $preke['kiekis'] ?></p>
              <label for="">Kiekis : </label>
              <input class="text-center kiekis"  type="number" name="kiekis" value="1" min="1" max="<?php echo $preke['kiekis'] ?>">
              <br>
              <p class="card-text"><?php echo $preke['kaina']?> €</p>
              <div class="row">
                <div class="col-6">
                  <a class="btn btn-dark text-white" href="prekes-template.php?id=<?php echo $preke['ID'] ?>">Perziureti</a>
                </div>
                <div class="col">
                  <input type="hidden" class="index" name="id" value="<?php echo $preke['ID'] ?>">
                  <a class="btn btn-dark text-white pirkti">Pirkti</a>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>

<?php  }  //BAIGESI IF WHILE ?>
</div>
<?php }  //Baigesi IF (turi kategorija ir lyti)
else { //Jeigu nera kategorijos
$prekes = getPrekesByLyt($lytis);
  ?>
   <div class="row ">
  <?php
  while ($preke = mysqli_fetch_assoc($prekes)) {
    $nuotrauka = getImg($preke['ID']);
    ?>
    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8 mt-2 mb-2 ">
      <form class="" action="prekes-template.php" method="post">
        <input type="hidden" id="index" name="index" value="<?php echo $preke['ID'] ?>">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="img/lg<?php echo $nuotrauka['pavadinimas']  ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title"><?php echo $preke['pavadinimas'] ?></h5>
            <p>Sandelyje yra: <?php echo $preke['kiekis'] ?></p>
            <label for="">Kiekis : </label>
            <input class="text-center kiekis" id="kiekis" type="number" name="kiekis" value="1" min="1" max="<?php echo $preke['kiekis'] ?>">
            <p class="card-text"><?php echo $preke['kaina']?> €</p>
            <div class="row">
              <div class="col-6">
                <a class="btn btn-dark text-white" href="prekes-template.php?id=<?php echo $preke['ID'] ?>">Perziureti</a>
              </div>
              <div class="col">
                <input type="hidden" class="index" name="id" value="<?php echo $preke['ID'] ?>">
                <a class="btn btn-dark text-white pirkti" >Pirkti</a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>



<?php }  //BAIGESI ELSE WHILE?>
</div>
<?php } //BAIGESI ELSE !
?>













<?php include('footer.php'); ?>
