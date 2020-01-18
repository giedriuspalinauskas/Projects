<?php
include('../models/prisijungimas-db.php');
include('../models/preke-crud.php');
// print_r($_POST);
createPreke(      $_POST['pavadinimas'],
                  $_POST['antraste'],
                  $_POST['nuolaida'],
                  $_POST['kiekis'],
                  $_POST['pozicija'],
                  $_POST['kategorija'],
                  $_POST['lytis'],
                  $_POST['kaina']);
 header('Location: ../admin-prekes.php');

 ?>
