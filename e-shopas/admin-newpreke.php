<?php
 include('header.php') ;
?>
<div class="contrainer border m-2">
  <a class="btn bg-dark text-white m-2" href="admin-prekes.php"> < Atgal </a>
  <div class="row">
    <div class="col d-flex justify-content-center">
      <h1>Prideti preke</h1>
    </div>
  </div>
  <form class="" action="controler/createPreke.php" method="post">
  <div class="row p-2 mt-1 ">
    <div class="col-2">
      <label for="">Pavadinimas: </label>
    </div>
    <div class="col">
      <input style="width: 100%; height:30px" type="text" name="pavadinimas" value="">
    </div>
  </div>
  <div class="row p-2 mt-1">
    <div class="col-2">
      <label for="">Antraste : </label>
    </div>
    <div class="col">
      <textarea style="width: 100%" name="antraste" rows="8" cols="80"></textarea>
    </div>
  </div>
  <div class="row p-2 mt-1 ">
    <div class="col-2">
      <label for="">Nuolaida : </label>
    </div>
    <div class="col">
      <input style="width: 100%; height:30px" type="text" name="nuolaida" value="">
    </div>
  </div>
  <div class="row p-2 mt-1 ">
    <div class="col-2">
      <label for="">Kiekis : </label>
    </div>
    <div class="col">
      <input style="width: 100%; height:30px" type="text" name="kiekis" value="">
    </div>
  </div>
  <div class="row p-2 mt-1 ">
    <div class="col-2">
      <label for="">Kaina : </label>
    </div>
    <div class="col">
      <input style="width: 100%; height:30px" type="text" name="kaina" value="">
    </div>
  </div>
  <div class="row p-2 mt-1 ">
    <div class="col-2">
      <label for="">Pozicija : </label>
    </div>
    <div class="col">
      <select name="pozicija" value="" class="form-control">
        <option></option>
        <option>rodyti</option>
        <option>nerodyti</option>
      </select>
    </div>
  </div>
  <div class="row p-2 mt-1 ">
    <div class="col-2">
      <label for="">Kategorija : </label>
    </div>
    <div class="col">
      <select name="kategorija" value="" class="form-control">
        <option></option>
        <option>Apyrankes</option>
        <option>Raktu</option>
        <option>Kaklo</option>
        <option>Automobiliu</option>
      </select>
    </div>
  </div>
  <div class="row p-2 mt-1 ">
    <div class="col-2">
      <label for="">Lytis : </label>
    </div>
    <div class="col">
      <select name="lytis" value="lytis" class="form-control">
        <option></option>
        <option>vyr</option>
        <option>mot</option>
        <option>vyr_mot</option>
      </select>
    </div>
  </div>
  <div class="row p-2 mt-1 ">
    <div class="col d-flex justify-content-end">
      <button class="btn bg-dark text-white" type="submit" name="button">Prideti preke</button>
    </div>
  </div>
  </form>
  <!-- containerio pabaiga -->
</div>




<?php include('footer.php');?>
