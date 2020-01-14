<?php

//getPrisijungimas();

// grazina konkretu gygdtojo duomenis is Db
//$nr - norimo gydytojo 'id' is duomenu bazes
//return - grazina masyva(array)
function getPreke($nr){
  $manoSQL = "SELECT * FROM prekes WHERE id = '$nr' ";
  $rezultataiMysqlObj = mysqli_query(getPrisijungimas(), $manoSQL);
  //testas
  $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObj);
  return $rezultataiArray;
}


// KURTI VARTOTOJA
function createPreke($pav, $antraste, $nuolaida, $kiekis, $pozicija, $kategorija, $lytis) {
  $manoSQL = "INSERT INTO prekes
                  VALUES (NULL, '$pav', '$antraste', '$nuolaida', NOW(), '$kiekis', '$pozicija', '$kategorija', '$lytis')
             ";
  $arPavyko = mysqli_query(getprisijungimas(),$manoSQL);
  if($arPavyko == false && DEBUG_MODE > 0){
    echo "ERROR: prisijungti nepavyko sukurti!!! <br>";
    echo mysqli_error(getPrisijungimas());
  }
}



// TRINTI VARTOTOJA
function deletePreke($nr){
  $manoSql = "DELETE FROM prekes
              WHERE id = '$nr'
             ";
  mysqli_query(getPrisijungimas(), $manoSql);
}


// GALIMA EDITINTI VAROTOJA
function updatePreke ($id, $pav, $antraste, $nuolaida, $data, $kiekis, $pozicija, $kategorija, $lytis){
  $manoSQL = "UPDATE prekes
              SET
                pavadinimas = '$pav',
                antraste = '$antraste',
                nuolaida = '$nuolaida',
                data = '$data',
                kiekis = '$kiekis',
                pozicija = '$pozicija',
                kategorija = '$kategorija',
                lytis = '$lytis'
              WHERE ID = '$id'
             ";
  mysqli_query(getPrisijungimas(), $manoSQL);
}


// Gaudi visus galimus vartotojus
function getPrekes($kiekis = 999999999){
    $ManoSql = "SELECT * FROM prekes limit $kiekis ";
    $prekesObj = mysqli_query(getPrisijungimas(), $ManoSql);
    // $gydytojuMasyvas = mysqli_fetch_assoc($gydytojaiObj);

    return $prekesObj;
}
