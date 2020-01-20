<?php

//getPrisijungimas();

// grazina konkretu gygdtojo duomenis is Db
//$nr - norimo gydytojo 'id' is duomenu bazes
//return - grazina masyva(array)
function getUzsakymoPreke($nr){
  $manoSQL = "SELECT * FROM uzsakymo_prekes WHERE uzsakymo_id = '$nr' ";
  $rezultataiMysqlObj = mysqli_query(getPrisijungimas(), $manoSQL);
  //testas
  $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObj);
  return $rezultataiArray;
}


// KURTI VARTOTOJA
function createUzsakymoPreke($uzsakymo_id, $prekes_id, $kiekis) {
  $manoSQL = "INSERT INTO uzsakymo_prekes
                  VALUES (NULL, '$uzsakymo_id', '$prekes_id', '$kiekis')
             ";
  $arPavyko = mysqli_query(getprisijungimas(),$manoSQL);
  if($arPavyko == false && DEBUG_MODE > 0){
    echo "ERROR: prisijungti nepavyko sukurti!!! <br>";
    echo mysqli_error(getPrisijungimas());
  }
}



// TRINTI VARTOTOJA
function deleteUzsakymoPreke($nr){
  $manoSql = "DELETE FROM uzsakymo_prekes
              WHERE id = '$nr'
             ";
  mysqli_query(getPrisijungimas(), $manoSql);
}


// GALIMA EDITINTI VAROTOJA
function updateUzsakymoPreke ($id, $pav, $aprasymas, $pozicija, $prekes_id){
  $manoSQL = "UPDATE uzsakymo_prekes
              SET
                pavadinimas = '$pav',
                aprasymas = '$aprasymas',
                pozicija = '$pozicija',
                prekes_id = '$prekes_id'
              WHERE ID = '$id'
             ";
  mysqli_query(getPrisijungimas(), $manoSQL);
}


// Gaudi visus galimus vartotojus
function getImgsByUzsakymo($id, $kiekis = 999999999){
    $ManoSql = "SELECT * FROM uzsakymo_prekes WHERE uzsakymo_id = '$id' ";
    $imgObj = mysqli_query(getPrisijungimas(), $ManoSql);
    // $gydytojuMasyvas = mysqli_fetch_assoc($gydytojaiObj);

    return $imgObj;
}
