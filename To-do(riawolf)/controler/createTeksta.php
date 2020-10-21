<?php
include('../models/prisijungimas-db.php');
include('../models/tekstas-crud.php');
// print_r($_POST);
createTekstas(    $_POST['pavadinimas'],
                  $_POST['antraste'],);
 header('Location: ../index.php');

 ?>
