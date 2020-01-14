<?php
include('../models/prisijungimas-db.php');
require_once('../models/vartotojai-crud.php');
session_start();
$emailas = $_POST['email'];
$slaptazodis = $_POST['password'];
$md5pass = md5($slaptazodis);
$manoSQL = "SELECT * FROM vartotojai WHERE pastas = '$emailas' AND slaptazodis = '$md5pass' ";
$rezultataiMysqlObj = mysqli_query(getPrisijungimas(), $manoSQL);
$vartotojas = mysqli_fetch_assoc($rezultataiMysqlObj);
if ($vartotojas['pastas'] === $emailas && $vartotojas['slaptazodis'] === $md5pass ) {
  echo "True";
  $_SESSION['user'] = $vartotojas;
} else echo "False";
 ?>
