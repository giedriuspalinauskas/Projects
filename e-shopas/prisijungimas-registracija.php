<?php
 include('header.php');
?>
<!-- REGISTRACIJA ----------------------------------------------------------------------------------- -->
<section class="row">
  <div class="col-6 border m-2">
    <h2>Registracija</h2><br>
    <form class="row" method="post">
         <label for="firstName" class="m-2 control-label col">Vardas:</label>
         <div class="col-9 m-2">
             <input type="text" id="firstName" name="vardas" placeholder="Vardas" class="form-control" autofocus>
             <li id="msg_vardas"></li>
         </div>
         <label for="lastName" class="m-2 control-label col">Pavarde:</label>
         <div class="col-9 m-2">
             <input type="text" id="lastName" name="pavarde" placeholder="Pavarde" class="form-control" autofocus>
             <li id="msg_lastName"></li>
         </div>
         <label for="password" class="m-2 control-label col">Slaptažodis:</label>
         <div class="col-9 m-2">
           <input type="password" id="password-prisijungimas" name="slaptazodis" placeholder="Slaptažodis" class="form-control" autofocus>
           <li id="msg_password"></li>
         </div>
         <label for="confirm_password" class="m-2 control-label col">P. Slaptažodį:</label>
         <div class="col-9 m-2">
           <input type="password" id="confirm_password" placeholder="P. Slaptažodį" class="form-control">
           <li id="msg_confirm_password" class='bg-warning mt-1'></li>
         </div>
         <label for="email" class="m-2 control-label col">El.Paštas:</label>
         <div class="col-9 m-2">
             <input type="text" id="email" name="mail" placeholder="El.Paštas" class="form-control" autofocus>
             <li id="msg_email"></li>
         </div>
         <label for="adress" class=" m-2 control-label col">Adresas:</label>
         <div class="col-9 m-2">
             <input type="Adress" id="adress" name="adresas" placeholder="Adresas" class="form-control" autofocus>
             <li id="msg_adress"></li>
         </div>
         <label for="city" class=" m-2 control-label col">Miestas:</label>
         <div class="col-9 m-2">
             <input type="city" id="city" name="miestas" placeholder="Miestas" class="form-control" autofocus>
             <li id="msg_city"></li>
         </div>
         <label for="zip" class=" m-2 control-label col">Pašto kodas:</label>
         <div class="col-9 m-2">
             <input type="zip" id="zip" name="pkodas" placeholder="Pašto kodas" class="form-control" autofocus>
             <li id="msg_zip"></li>
         </div>
         <label for="contry" class=" m-2 control-label col">Šalis:</label>
         <div class="col-9 m-2">
             <input type="country" id="county" name="miestas" placeholder="" class="form-control" value="Lietuva" autofocus>
             <li id="msg_county"></li>
         </div>
         <label for="tel" class=" m-2 control-label col">Tel. numeris:</label>
         <div class="col-9 m-2">
             <input type="text" id="tel" name="telNumeris" placeholder="Tel. numeris" class="form-control" autofocus>
             <li id="msg_tel"></li>
         </div>
         <br><br>
         <div class="col-12 d-flex justify-content-end m-2">
           <button class="btn border" style="color: white; background-color: black" id="Registracija" >Registruotis</button>
         </div>
         <div id=pranesimas class="pasleptas col-11 m-2 p-2 bg-warning border">
           <ul>
           </ul>
         </div>
       </form>
   </div>

<!-- LogIn ------------------------------------------------------------------------------------------ -->

<aside class="col d-flex align-items-center border m-2">
 <form class="row" method="post">
        <h2 class="col-11 ml-2 mb-4">Prisijungimas</h2>
       <label for="email" class="col-3 m-2">El.Paštas:</label>
       <div class="col-8 m-2">
         <input type="text" id="prisijungimas" name="email" placeholder="El.Paštas" class="form-control" autofocus>
       </div>
       <label for="password" class="m-2 col-3 ">Slaptažodis:</label>
       <div class="col-8 m-2">
         <input type="password" id="password" name="password" placeholder="Slaptažodis" class="form-control" autofocus>
      </div>
      <div class="col d-flex justify-content-end m-2">
      <label for="prisiminti-mane" class="mr-2 mt-2 col-1">Isiminti:</label>
      <div class="col-1 mb-2 ml-2">
        <input type="checkbox" id="prisiminti-mane" class="form-control" autofocus>
     </div>
         <button class="btn border" style="color: white; background-color: black" id="Prisijungti" name="button">Prisijungti</button>
       </div>
 </form>
</aside>
</section>
<?php include('footer.php') ?>
