<?php

// getPrisijungimas();
// KURTI teksta
function createTekstas($pav, $antraste) {
  $manoSQL = "INSERT INTO tekstas
                  VALUES (NULL, '$pav', '$antraste', NOW())
             ";
  $arPavyko = mysqli_query(getprisijungimas(),$manoSQL);
  if($arPavyko == false && DEBUG_MODE > 0){
    echo "ERROR: prisijungti nepavyko sukurti!!! <br>";
    echo mysqli_error(getPrisijungimas());
  }
}



// TRINTI VARTOTOJA
function deleteTekstas($nr){
  $manoSql = "DELETE FROM tekstas
              WHERE id = '$nr'
             ";
  mysqli_query(getPrisijungimas(), $manoSql);
}


// GALIMA EDITINTI teksta
function updateTekstas ($id, $pav, $antraste, $data){
  $manoSQL = "UPDATE tekstas
              SET
                pavadinimas = '$pav',
                antraste = '$antraste',
                data = NOW(),
              WHERE ID = '$id'
             ";
  mysqli_query(getPrisijungimas(), $manoSQL);
}


// Gaudi visus galimus tekstus
function getTekstai($kiekis = 999999999){
    $ManoSql = "SELECT * FROM tekstas limit $kiekis ";
    $tekstaiObj = mysqli_query(getPrisijungimas(), $ManoSql);
    return $tekstaiObj;
}
