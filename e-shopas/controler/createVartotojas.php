<?php
include('../models/prisijungimas-db.php');
require_once('../models/vartotojai-crud.php');
$mainpass = $_POST['slaptazodis'];
$md5pass = md5($mainpass);
createVartotojas( $_POST['vardas'],
                  $_POST['pavarde'],
                  $md5pass,
                  $_POST['mail'],
                  $_POST['adresas'],
                  $_POST['miestas'],
                  $_POST['pkodas'],
                  $_POST['salis'],
                  $_POST['telNumeris']);
// header('Location: ../prisijungimas-registracija.php');
// header('Location: ../index.php');
 ?>
