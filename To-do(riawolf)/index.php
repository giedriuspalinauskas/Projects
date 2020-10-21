<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
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
          <button class="btn btn-primary mt-3" id="forma">Įrašyti</button>
        </div>
      </div>
    </form>

    <?php
      $tekstai = getTekstai();
      // print_r($tekstai);
      // while ($tekstas = mysqli_fetch_assoc($tekstai)){
      //   print_r($tekstas);
      // }
     ?>

        <script type="text/javascript" src="libs/jquery-3.4.1.min.js"> </script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js"> </script>
        <script type="text/javascript" src="js/main.js"></script>

     </body>
</html>
