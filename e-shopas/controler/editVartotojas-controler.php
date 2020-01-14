<?php
include('../models/prisijungimas-db.php');
require_once('../models/vartotojai-crud.php');
// print_r($_POST['level']);
updateVartotojas( $_POST['id'],
                  $_POST['vardas'],
                  $_POST['pavarde'],
                  $_POST['slaptazodis'],
                  $_POST['mail'],
                  $_POST['adresas'],
                  $_POST['miestas'],
                  $_POST['pkodas'],
                  $_POST['salis'],
                  $_POST['telNumeris'],
                  $_POST['level']);
$direct = $_GET['x'];
if(isset($direct)){
  header('Location: ../admin-vartotojai.php');
} else {
  header('Location: ../paskyra.php');
}

// header('Location: ../index.php');
 ?>
