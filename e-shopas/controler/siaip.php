<?php
session_start();
print_r($_SESSION['krepselis']);
echo ($_GET['id']);
$count = count($_SESSION['krepselis']);
$tikrinimas = 0;
for ($i=0; $i < $count; $i++) {
  $nr = $_SESSION['krepselis'][$i]['prekesID'];
  if ($nr == $_GET['id']) {
   $tikrinimas = 1;
 }
}
echo $tikrinimas;
echo $_SESSION['krepselis'][0]['prekesID'];

echo "<br>";
// $_SESSION['krepselis'][$i]['kiekis'] = $_SESSION['krepselis'][$i]['kiekis'] + $_POST['kiekis'];
echo $_SESSION['krepselis'][0]['kiekis'];
 ?>
