<?php

session_start();
$count = count($_SESSION['krepselis']);
unset($_SESSION['krepselis'][$_GET['index']]);
$a = 0;
for ($i=0; $i < $count; ) {
  if (isset($_SESSION['krepselis'][$i])) {
    $naujasMasyvas[$a] = $_SESSION['krepselis'][$i];
    $i++;
    $a++;
  } else $i++;
}
$_SESSION['krepselis'] = $naujasMasyvas;
// print_r($naujasMasyvas);
// echo "<br>";
// print_r($_SESSION);
header('Location: ../krepselis.php');
 ?>
