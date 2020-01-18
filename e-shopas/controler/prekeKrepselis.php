<?php
include('../models/prisijungimas-db.php');
include('../models/preke-crud.php');
include('../models/img-crud.php');
session_start();
$count = count($_SESSION['krepselis']);
$tikrinimas = 0;
for ($i=0; $i < $count; $i++) {
  if ($_POST['index'] == $_SESSION['krepselis'][$i]['prekesID']) {
   $prekesID = $i;
   $tikrinimas = 1;
 }
}
if ($tikrinimas == 0) {
  $preke = getPreke($_POST['index']);
  $nuotrauka = getImg($_POST['index']);
  $krepselis = ['prekesID' => $_POST['index'],
  'nuotrauka' => $nuotrauka['pavadinimas'],
  'pavadinimas' => $preke['pavadinimas'],
  'kiekis' => $_POST['kiekis'],
  'kaina' => $preke['kaina']];


  $count = count($_SESSION['krepselis']);
  $_SESSION['krepselis'][$count] = $krepselis;
  print_r($_SESSION);
} else $_SESSION['krepselis'][$prekesID]['kiekis'] = $_SESSION['krepselis'][$prekesID]['kiekis'] + $_POST['kiekis'];


 ?>
