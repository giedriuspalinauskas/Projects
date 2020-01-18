<?php
include('../models/prisijungimas-db.php');
require_once('../models/img-crud.php');
require_once('../models/preke-crud.php');
$preke = getPreke($_GET['id']);
$nuotraukos = getImgsByPreke($preke['ID']);
while($nuotrauka = mysqli_fetch_assoc($nuotraukos)){
  unlink("../img/org".$nuotrauka['pavadinimas']);
  unlink("../img/lg".$nuotrauka['pavadinimas']);
  unlink("../img/md".$nuotrauka['pavadinimas']);
  unlink("../img/sm".$nuotrauka['pavadinimas']);
  deleteImg($nuotrauka['ID']);
}
deletePreke($preke['ID']);

header('Location: ../admin-prekes.php');

// header('Location: ../index.php');
 ?>
