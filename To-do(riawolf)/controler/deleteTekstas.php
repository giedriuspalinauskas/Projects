<?php
include('../models/prisijungimas-db.php');
require_once('../models/tekstas-crud.php');
deleteTekstas($_GET['id']);

header('Location: ../index.php');
 ?>
