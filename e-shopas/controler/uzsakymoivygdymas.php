<?php
session_start();
include('../models/prisijungimas-db.php');
include('../models/uzsakymas-crud.php');
include('../models/uzsakymo-prekes-crud.php');
include('../models/preke-crud.php');
$count = count($_SESSION['krepselis']);
$suma = 0;
for ($i=0; $i < $count; $i++) {
  $preke = $_SESSION['krepselis'][$i];
  $suma += $preke['kaina']*$preke['kiekis'];
}
if ($_POST['atsiemimas'] != "Parduotuve") {
  $suma += 3.5;
}
$adresas = $_POST['adresas'].", ".$_POST['miestas'].", ".$_POST['pastokodas'].", ".$_POST['salis'];
if (isset($_SESSION['user'])) {
  $vartotojo_id = $_SESSION['user']['ID'];
  createUzsakymas(
                  $_POST['vardas'],
                  $_POST['pavarde'],
                  $_POST['epastas'],
                  $adresas,
                  $_POST['telnr'],
                  $_POST['atsiemimas'],
                  $suma,
                  $vartotojo_id
                );
} else {
createUzsakymas(
                $_POST['vardas'],
                $_POST['pavarde'],
                $_POST['epastas'],
                $adresas,
                $_POST['telnr'],
                $_POST['atsiemimas'],
                $suma
              );
}
$last_id =  mysqli_insert_id(getprisijungimas());

for ($i=0; $i < $count ; $i++) {
  $preke = $_SESSION['krepselis'][$i];
  createUzsakymoPreke(
                      $last_id,
                      $preke['prekesID'],
                      $preke['kiekis']
                    );
  $kiekis = getPreke($preke['prekesID']);
  $naujasKiekis = $kiekis['kiekis'] - $preke['kiekis'];
  $prekesID = $preke['prekesID'];
  $manoSQL = "UPDATE prekes
              SET
                kiekis = '$naujasKiekis'
              WHERE ID = '$prekesID'
             ";
mysqli_query(getPrisijungimas(), $manoSQL);
}
unset($_SESSION['krepselis']);
header('Location: ../index.php');
 ?>
