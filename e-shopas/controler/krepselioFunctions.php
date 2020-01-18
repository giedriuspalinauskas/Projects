<?php
session_start();
$index = $_POST['index'];
$kiekis = $_POST['kiekis'];
$_SESSION['krepselis'][$index]['kiekis'] = $kiekis;
$count = count($_SESSION['krepselis']);
$suma = 0;
$visasKiekis = 0;
for ($i=0; $i < $count; ) {
  $preke = $_SESSION['krepselis'][$i];
  $suma += $preke['kaina']*$preke['kiekis'];
  $visasKiekis += $preke['kiekis'];
  $i++;
  if (!isset($_SESSION['krepselis'][$i])) {
    $i++;
  }
}


$naujaKaina =   $_SESSION['krepselis'][$index]['kaina']*$kiekis ;
$manoAray = ['kaina' => $naujaKaina, 'suma' => $suma, 'visaskiekis' => $visasKiekis ];
echo json_encode( $manoAray );

 ?>
