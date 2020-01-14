<?php
include('../models/prisijungimas-db.php');
require_once('../models/vartotojai-crud.php');
deleteVartotojas($_GET['id']);

header('Location: ../admin-vartotojai.php');

// header('Location: ../index.php');
 ?>
