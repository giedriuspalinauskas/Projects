<?php
include('header.php');

 ?>
<a class="btn bg-dark text-white m-2" href="admin-prekes.php"> < Atgal </a>
 <h1>Prideti nuotauka</h1>
 <div class="container row">
  <div class="col-12 border p-4">
    <form action="controler/upload.php" method="post" enctype="multipart/form-data">
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">Aprasymas: </h5>
        </div>
        <div class="col">
          <textarea class="p-2" style="width: 100%" name="aprasymas" rows="8" cols="80"></textarea>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
          <h5 for="">Pozicija: </h5>
        </div>
        <div class="col">
          <input class="p-2" style="width: 100%" type="text" name="pozicija" value="">
          <input class="p-2" type="hidden" style="width: 100%" type="text" name="prekes_id" value="<?php echo $_GET['id'] ?>">

        </div>
      </div>
      <div class="row mt-2">
        <div class="col-3">
              <h5 for="">Ikelkite faila: </h5>
        </div>
        <div class="col">
          <input  type="file" name="fileToUpload" id="fileToUpload">
        </div>
      </div>

      <div class="row mt-2">
        <div class="col d-flex justify-content-end mr-2 mt-2">
          <input class="btn btn-sm bg-dark text-white" type="submit" value="Ikelti nuotrauka" name="submit">
        </div>
      </div>
    </form>
  </div>
</div>


<!-- <form action="controler/upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input  type="file" name="fileToUpload" id="fileToUpload">
    <input class="btn btn-sm bg-dark text-white" type="submit" value="Upload Image" name="submit">
</form> -->


<?php include('footer.php') ?>
