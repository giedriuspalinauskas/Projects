<?php


//getPrisijungimas();

// grazina konkretu gygdtojo duomenis is Db
//$nr - norimo gydytojo 'id' is duomenu bazes
//return - grazina masyva(array)
function getUzsakymas($nr){
  $manoSQL = "SELECT * FROM uzsakymas WHERE id = '$nr' ";
  $rezultataiMysqlObj = mysqli_query(getPrisijungimas(), $manoSQL);
  //testas
  $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObj);
  return $rezultataiArray;
}


// KURTI VARTOTOJA
function createUzsakymas($vardas, $pav, $mail, $adresas, $tel, $atsiemimas, $suma, $vartotojo_id = 0) {
  $manoSQL = "INSERT INTO uzsakymas
                  VALUES (NULL, '$vardas', '$pav', '$mail', '$adresas', '$tel', '$atsiemimas', '$suma', $vartotojo_id)
             ";
  $arPavyko = mysqli_query(getprisijungimas(),$manoSQL);
  if($arPavyko == false && DEBUG_MODE > 0){
    echo "ERROR: prisijungti nepavyko sukurti!!! <br>";
    echo mysqli_error(getPrisijungimas());
  }
}



// TRINTI VARTOTOJA
function deleteUzsakymas($nr){
  $manoSql = "DELETE FROM uzsakymas
              WHERE id = '$nr'
             ";
  mysqli_query(getPrisijungimas(), $manoSql);
}


// GALIMA EDITINTI VAROTOJA
function updateUzsakymas ($id, $vardas, $pav, $mail, $adresas, $tel, $atsiemimas, $suma){
  $manoSQL = "UPDATE uzsakymas
              SET
                vardas = '$vardas',
                pavarde = '$pav',
                pastas = '$mail',
                adresas = '$adresas',
                telNumeris = '$tel',
                atsiemimas = '$atsiemimas',
                suma = '$suma'
              WHERE ID = '$id'
             ";
  mysqli_query(getPrisijungimas(), $manoSQL);
}


// Gaudi visus galimus vartotojus
function getUzsakymai($kiekis = 999999999){
    $ManoSql = "SELECT * FROM uzsakymas limit $kiekis ";
    $vartotojuObj = mysqli_query(getPrisijungimas(), $ManoSql);
    // $gydytojuMasyvas = mysqli_fetch_assoc($gydytojaiObj);

    return $vartotojuObj;
}

// mysqli_close(getPrisijungimas());
