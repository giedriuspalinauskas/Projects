<?php
include('models/prisijungimas-db.php');
include('models/vartotojai-crud.php');
include('models/preke-crud.php');
include('models/img-crud.php');
include('models/uzsakymas-crud.php');
include('models/uzsakymo-prekes-crud.php');

session_start();
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
};

if(!isset($_SESSION['krepselis'])){
  $_SESSION['krepselis'] =[];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>lili Aksesuarai | rankų darbo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="icon-small.png" rel="icon" />
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="container-fluid">

<!-- HEADERIS ------------------------------------------------------------------------------------ -->

        <header class="row aukstis-50 juoda">

          <div class="col-4 aukstis-50 d-flex align-items-center ml-4">
            <a class="mr-3 p-2" href="#">Apie mus</a>
            <a class="p-2" href="#">Sutarties sąlygos</a>
          </div>

          <div class="col d-flex justify-content-end align-items-center mr-5">
            <?php if (isset($user)) { ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle p-2" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false" href="prisijungimas-registracija.php"><svg class="mr-2" viewBox="-42 0 512 512.002"><path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0"/><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0"/></svg><?php echo ($user['vardas']." ".$user['pavarde']); ?></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="paskyra.php">Paskyros informacija</a>
                  <?php if ($user['level'] > 1) { ?>
                    <a class="dropdown-item" href="admin.php">Admin aplinka</a>
                <?php  } ?>
                  <a class="dropdown-item" href="vartotojoUzsakymai.php">Uzsakymai</a>
                  <a class="dropdown-item" href="controler/logout.php">Log Out</a>
                </div>
           </li>
          <?php } else {?>
            <a class="p-2" href="prisijungimas-registracija.php"><svg class="mr-2" viewBox="-42 0 512 512.002"><path d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0"/><path d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0"/></svg>Prisijungti / Registruotis</a>
          <?php } //PHP PABAIGA ?>

            <a class="ml-3 p-2" href="#"><svg class="mr-2" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve"><path d="M255,489.6l-35.7-35.7C86.7,336.6,0,257.55,0,160.65C0,81.6,61.2,20.4,140.25,20.4c43.35,0,86.7,20.4,114.75,53.55
			      C283.05,40.8,326.4,20.4,369.75,20.4C448.8,20.4,510,81.6,510,160.65c0,96.9-86.7,175.95-219.3,293.25L255,489.6z"/></svg>Megstamiausios</a>
          </div>
        </header>

<!-- Nav Bar ------------------------------------------------------------------------------------- -->

        <nav class="row juoda">
          <div class="col-2 justify-content-center align-items-center d-flex ">
            <a class="m-2" href="index.php"><img src="img/logo.png"></a>
          </div>
<!-- Puslapio logo -->
<!-- meniu  -->
          <nav class="col-6 navbar navbar-expand-lg ">
            <div class="collapse navbar-collapse"  id="navbarNavDropdown">
              <ul class="navbar-nav" data-hover="dropdown">
                <li class="nav-item active">
                  <a class="nav-link mr-2" href="index.php">Pradžia <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mr-2" href="" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">
                    Vyriški Aksesuarai
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="prekes.php?kategorija=&lytis=vyr">Visos vyriškos prekės</a>
                    <a class="dropdown-item" href="prekes.php?kategorija=Apyrankes&lytis=vyr">Apyrankės</a>
                    <a class="dropdown-item" href="prekes.php?kategorija=Raktu&lytis=vyr">Raktų Pakabukai</a>
                    <a class="dropdown-item" href="prekes.php?kategorija=Kaklo&lytis=vyr">Kaklo papuošalai</a>
                    <a class="dropdown-item" href="prekes.php?kategorija=Automobiliu&lytis=vyr">Automobilių aksesuarai</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle mr-2" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Moteriški Aksesuarai
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="prekes.php?kategorija=&lytis=mot">Visos moteriškos prekės</a>
                    <a class="dropdown-item" href="prekes.php?kategorija=Apyrankes&lytis=mot">Apyrankės</a>
                    <a class="dropdown-item" href="prekes.php?kategorija=Raktu&lytis=mot">Raktų pakabukai</a>
                    <a class="dropdown-item" href="prekes.php?kategorija=Kaklo&lytis=mot">Kaklo papuošalai</a>
                    <a class="dropdown-item" href="prekes.php?kategorija=Automobiliu&lytis=mot">Automobilių aksesuarai</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link mr-2" href="kontaktai.php">Kontaktai</a>
                </li>
              </ul>
            </div>
          </nav>
          <!-- end meniu -->
          <!-- Pieska -->
          <div class="col d-flex justify-content-end align-items-center mb-2 mr-4">
            <form class="row" action="index.php" method="post">
              <input id="paieska" type="text" name="" value="" placeholder="Paieška">
              <button id="p-migtukas" type="submit" name="button"><img src="img/magnifying-glass.svg" alt="Paieška"></button>
            </form>
            <!-- end paieska -->
            <!-- shopping cart -->
            <div class="col-md-3 col-sm-9 col-xs-12">

                <a class=" ml-1 btn btn-light " id="krepselis" href="krepselis.php">Krepselis(<?php echo count($_SESSION['krepselis']); ?>)</a>

          </div>
        </nav>
