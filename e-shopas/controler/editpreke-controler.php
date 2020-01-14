<?php

include('../models/prisijungimas-db.php');
require_once('../models/preke-crud.php');
print_r($_POST);
updatePreke(      $_POST['id'],
                  $_POST['pavadinimas'],
                  $_POST['antraste'],
                  $_POST['nuolaida'],
                  $_POST['data'],
                  $_POST['kiekis'],
                  $_POST['pozicija'],
                  $_POST['kategorija'],
                  $_POST['lytis']);

header('Location: ../admin-prekes.php');
 ?>
