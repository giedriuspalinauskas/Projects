<!DOCTYPE html>
<?php
include('models/tekstas-crud.php');
include('models/prisijungimas-db.php');
?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body class="container">
      <!-- -------------------------------FORMA DARBO UZDUOCIAI ------------------------------------- -->
      <div class="text-center mb-5">
        <h1>TO-DO</h1>
      </div>
      <form class="container">
      <div class="form-group">
        <label for="pavadinimas">Pavadinimas</label>
        <input type="text" class="form-control mb-2" id="pavadinimas" name="pavadinimas">
        <p id="msg_pavadinimas"></p>
        <label>Jūsų darbo užduotis</label>
        <!-- textarea duomenu bazeja telpa tik 500 simboliu -->
        <textarea class="form-control" rows="5" id="tekstas" name="antraste" maxlength="500"></textarea>
        <p id="msg_antraste"></p>
        <div class="float-right">
          <button class="btn btn-primary m-3" id="forma">Įrašyti</button>
        </div>
      </div>
    </form>

<!-- --------------------------------- TENTELE ----------------------------------------------------- -->
    <table class="table">
      <form class="">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col"></th>
          <th scope="col">Pavadinimas</th>
          <th scope="col">Jūsų darbo užduotis</th>
          <th scope="col">Data</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <!-- Gauni visi duomenys is duomenu bazes -->
      <?php
        $i = 1;
        $tekstai = getTekstai();
        while ($tekstas = mysqli_fetch_assoc($tekstai)){ ?>
      <tbody>
        <tr>
          <th scope="row"><?php echo $i++;  ?></th>
          <td><input type="checkbox" name="checkbox" class="form-check-input" value="<?php echo $tekstas['ID'] ?>"></td>
          <td><?php echo $tekstas['Pavadinimas'] ?></td>
          <td><?php echo $tekstas['Tekstas'] ?></td>
          <td><?php echo $tekstas['Data'] ?></td>
          <td> <a class="btn bg-warning text-white" href="controler/deleteTekstas.php?id=<?php echo $tekstas['ID'] ?>">Trinti</a> </td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <input type="button" onclick='deleteChecked()' value="Trinti pazymetus"/>
      </form>
      <footer class="m-5"></footer>
        <script type="text/javascript" src="libs/jquery-3.4.1.min.js"> </script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js"> </script>
        <script type="text/javascript" src="js/main.js"></script>

     </body>
</html>
