<?php include('header.php')?>
<?php
$nuotraukos = getImgsByPreke($_POST['id']);
$preke = getPreke($_POST['id']);
?>

<div class="row  ">
  <div class="col d-flex justify-content-center">
    <h1><?php echo $preke['pavadinimas'] ?></h1>
  </div>
</div>
<div class="row border p-2 m-2">
  <div class="col-4 mr-2">
    <div style="width: 400px;" id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php
        $i=0;
        while ($nuotrauka = mysqli_fetch_assoc($nuotraukos)){ ?>
         <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i++ ?>"></li>
        <?php
        }
        ?>
      </ol>
      <div class="carousel-inner">
        <?php
        $nuotraukos = getImgsByPreke($_POST['id']);
        $i=0;
        while ($nuotrauka = mysqli_fetch_assoc($nuotraukos)){
          if ($i == 0) { ?>
            <div class="carousel-item active">
              <img src="img/lg<?php echo $nuotrauka['pavadinimas'] ?>" class="d-block w-100" alt="...">
            </div>
        <?php  } else ?>
          <div class="carousel-item">
            <img src="img/lg<?php echo $nuotrauka['pavadinimas'] ?>" class="d-block w-100" alt="...">
          </div>
        <?php
        $i++;
        }
        ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col ml-3">
    <div class="row">
      <div class="col">
        <br>
        <p><?php echo $preke['antraste'] ?></p>
        <p>Sandelyje yra: <?php echo $preke['kiekis'] ?></p>
        <label for="">Kiekis : </label>
        <input class="text-center kiekis" type="number" name="kiekis" value="1" min="1" max="<?php echo $preke['kiekis'] ?>">
        <br>
        <p>Kaina: <?php echo $preke['kaina']?> €</p>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col d-flex justify-content-end">
        <input type="hidden" class="index" name="id" value="<?php echo $preke['ID'] ?>">
        <a class="btn btn-dark text-white mr-5 pirkti" >Pirkti</a>
      </div>
    </div>
  </div>
</div>










<?php include('footer.php'); ?>
