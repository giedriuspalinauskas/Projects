<?php
//PHP konstantos (prisijungimas prie duomenu bazes)
define( 'DB_PAVADINIMAS',      'to_do');
define( 'DB_TIPAS',            'localhost');
define( 'MYSQL_USER_VARDAS' ,   'root');
define( 'MYSQL_USER_PASS' ,     'root');
//0 isjungta; 1 - rodo pagrindiniai; 2 - rodo visus;
define( 'DEBUG_MODE',           '1');

$prisijungimas = mysqli_connect(DB_TIPAS, MYSQL_USER_VARDAS, MYSQL_USER_PASS, DB_PAVADINIMAS);

//MySql lietuviu kalbos prisijungimas
mysqli_set_charset(getPrisijungimas(), "UFT8"); // !!!! UFT8 be jokio '-'

function getPrisijungimas(){
  //noriu prieti prie GLOBALIU kintamuju
  global $prisijungimas;
if ($prisijungimas == false) {
  echo "ERROR: prisijungti nepavyko prie DB!!! <br>";
  echo mysqli_connect_error($prisijungimas);
  return NULL;
} else {
  return $prisijungimas;
  };
}
 ?>
