<?php
include('../models/prisijungimas-db.php');
require_once('../models/img-crud.php');
$nuotrauka = getImg($_POST['id']);
print_r($nuotrauka);
unlink("../img/org".$nuotrauka['pavadinimas']);
unlink("../img/lg".$nuotrauka['pavadinimas']);
unlink("../img/md".$nuotrauka['pavadinimas']);
unlink("../img/sm".$nuotrauka['pavadinimas']);
deleteImg($nuotrauka['ID']);

header('Location: ../admin-prekes.php');

// header('Location: ../index.php');
 ?>
