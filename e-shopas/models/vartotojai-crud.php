<?php


//getPrisijungimas();

// grazina konkretu gygdtojo duomenis is Db
//$nr - norimo gydytojo 'id' is duomenu bazes
//return - grazina masyva(array)
function getVartotojas($nr){
  $manoSQL = "SELECT * FROM vartotojai WHERE id = '$nr' ";
  $rezultataiMysqlObj = mysqli_query(getPrisijungimas(), $manoSQL);
  //testas
  $rezultataiArray = mysqli_fetch_assoc($rezultataiMysqlObj);
  return $rezultataiArray;
}


// KURTI VARTOTOJA
function createVartotojas($vardas, $pav, $pass, $mail, $adresas, $miestas, $pkodas, $salis, $tel, $level=1) {
  $manoSQL = "INSERT INTO vartotojai
                  VALUES (NULL, '$vardas', '$pav', '$pass', '$mail', '$adresas', '$miestas', '$pkodas', '$salis', '$tel', '$level')
             ";
  $arPavyko = mysqli_query(getprisijungimas(),$manoSQL);
  if($arPavyko == false && DEBUG_MODE > 0){
    echo "ERROR: prisijungti nepavyko sukurti!!! <br>";
    echo mysqli_error(getPrisijungimas());
  }
}



// TRINTI VARTOTOJA
function deleteVartotojas($nr){
  $manoSql = "DELETE FROM vartotojai
              WHERE id = '$nr'
             ";
  mysqli_query(getPrisijungimas(), $manoSql);
}


// GALIMA EDITINTI VAROTOJA
function updateVartotojas ($id, $vardas, $pav, $pass, $mail, $adresas, $miestas, $pkodas, $salis, $tel, $level=1){
  $manoSQL = "UPDATE vartotojai
              SET
                vardas = '$vardas',
                pavarde = '$pav',
                slaptazodis = '$pass',
                pastas = '$mail',
                adresas = '$adresas',
                miestas = '$miestas',
                PastoKodas = '$pkodas',
                salis = '$salis',
                telNumeris = '$tel',
                level = '$level'
              WHERE id = '$id'
             ";
  mysqli_query(getPrisijungimas(), $manoSQL);
}


// Gaudi visus galimus vartotojus
function getVartotojai($kiekis = 999999999){
    $ManoSql = "SELECT * FROM vartotojai limit $kiekis ";
    $vartotojuObj = mysqli_query(getPrisijungimas(), $ManoSql);
    // $gydytojuMasyvas = mysqli_fetch_assoc($gydytojaiObj);

    return $vartotojuObj;
}

// mysqli_close(getPrisijungimas());
