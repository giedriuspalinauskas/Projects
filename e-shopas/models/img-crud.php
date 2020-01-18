<?php

//getPrisijungimas();

// grazina konkretu gygdtojo duomenis is Db
//$nr - norimo gydytojo 'id' is duomenu bazes
//return - grazina masyva(array)
function getImg($nr){
  $manoSQL = "SELECT * FROM img WHERE prekes_id = '$nr' ";
  $rezultataiMysqlObj = mysqli_query(getPrisijungimas(), $manoSQL);
  //testas
  $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObj);
  return $rezultataiArray;
}


// KURTI VARTOTOJA
function createImg($pav, $aprasymas, $pozicija, $prekes_id) {
  $manoSQL = "INSERT INTO img
                  VALUES (NULL, '$pav', '$aprasymas', '$pozicija', '$prekes_id')
             ";
  $arPavyko = mysqli_query(getprisijungimas(),$manoSQL);
  if($arPavyko == false && DEBUG_MODE > 0){
    echo "ERROR: prisijungti nepavyko sukurti!!! <br>";
    echo mysqli_error(getPrisijungimas());
  }
}



// TRINTI VARTOTOJA
function deleteImg($nr){
  $manoSql = "DELETE FROM img
              WHERE id = '$nr'
             ";
  mysqli_query(getPrisijungimas(), $manoSql);
}


// GALIMA EDITINTI VAROTOJA
function updateImg ($id, $pav, $aprasymas, $pozicija, $prekes_id){
  $manoSQL = "UPDATE img
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
function getImgsByPreke($id, $kiekis = 999999999){
    $ManoSql = "SELECT * FROM img WHERE prekes_id = '$id' ";
    $imgObj = mysqli_query(getPrisijungimas(), $ManoSql);
    // $gydytojuMasyvas = mysqli_fetch_assoc($gydytojaiObj);

    return $imgObj;
}
