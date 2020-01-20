console.log("labas");

// TIKRINIMAS registracijos ar visi laukai tinka ir
 // jeigu tinka naudojamas ajax ir viska ideda i DB
$('#Registracija').on("click", function(e) {
  let vardas =         $('#firstName').val();
  let pavarde =        $('#lastName').val();
  let slaptazodis =    $('#password-prisijungimas').val();
  let pslaptazodis =   $('#confirm_password').val();
  let mail =           $('#email').val();
  let adresas =        $('#adress').val();
  let miestas =        $('#city').val();
  let pkodas =         $('#zip').val();
  let salis =          $('#county').val();
  let telnum =         $('#tel').val();
  let tikrinimas = "False";
mail = mail.toLowerCase();

// let trinimas = $('#pranesimas').empty();

if (vardas === "") {
  $('#firstName').css({"border-color":"red"});
  $('#msg_vardas').html("<li class='bg-warning mt-1'>* Iveskite varda !</li>");
  tikrinimas = "True";
} else {
            $('#firstName').css({"border-color":"green"});
            $('#msg_vardas').empty();
       }

if (pavarde === "") {
  $('#lastName').css({"border-color":"red"});
  $('#msg_lastName').html("<li class='bg-warning mt-1'>* Iveskite pavarde !</li>");
  tikrinimas = "True";
} else {
            $('#lastName').css({"border-color":"green"});
            $('#msg_lastName').empty();
       }
if (adresas === "") {
  $('#adress').css({"border-color":"red"});
  $('#msg_adress').html("<li class='bg-warning mt-1'>* Iveskite adresa !</li>");
  tikrinimas = "True";
} else {
            $('#adress').css({"border-color":"green"});
            $('#msg_adress').empty();
       }

if (miestas === "") {
  $('#city').css({"border-color":"red"});
  $('#msg_city').html("<li class='bg-warning mt-1'>* Iveskite miesta !</li>");
  tikrinimas = "True";
} else {
            $('#city').css({"border-color":"green"});
            $('#msg_city').empty();
       }

if (pkodas === "") {
  $('#zip').css({"border-color":"red"});
  $('#msg_zip').html("<li class='bg-warning mt-1'>* Iveskite pasto koda !</li>");
  tikrinimas = "True";
} else {
            $('#zip').css({"border-color":"green"});
            $('#msg_zip').empty();
       }

if (salis === "") {
  $('#county').css({"border-color":"red"});
  $('#msg_county').html("<li class='bg-warning mt-1'>* Iveskite varda !</li>");
  tikrinimas = "True";
} else {
            $('#county').css({"border-color":"green"});
            $('#msg_county').empty();
       }

if (telnum === "") {
  $('#tel').css({"border-color":"red"});
  $('#msg_tel').html("<li class='bg-warning mt-1'>* Iveskite telefono numeri !</li>");
  tikrinimas = "True";
} else {
            $('#tel').css({"border-color":"green"});
            $('#msg_tel').empty();
       }

if (slaptazodis === "" ) {
  $('#password-prisijungimas').css({"border-color":"red"});
  $('#msg_password').append("<li class='bg-warning mt-1'>* Iveskite slaptazodi !</li>");
  tikrinimas = "True";
} else if (slaptazodis.length < 8) {
  $('#password-prisijungimas').css({"border-color":"red"});
  $('#msg_password').append("<li class='bg-warning mt-1'>* Slaptazodis turi buti ilgesnis nei 8 simboliai !</li>");
    tikrinimas = "True";
} else if (slaptazodis !== pslaptazodis) {
  $('#confirm_password').css({"border-color":"red"});
  $('#password-prisijungimas').css({"border-color":"red"});
  $('#msg_confirm_password').html("<li class='bg-warning mt-1'>* Slaptazodziai nesutampa !</li>");
  tikrinimas = "True";
} else { $('#confirm_password').css({"border-color":"green"});
         $('#password-prisijungimas').css({"border-color":"green"});
         $('#confirm_password').empty();
         $('#msg_confirm_password').empty();
        }

        function IsEmail(email) {
          var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
          if(!regex.test(email)) {
             return false;
          }else{
             return true;
          }
        }

        if(IsEmail(mail)==false){
          $('#email').css({"border-color":"red"});
          $('#msg_email').html("<li class='bg-warning mt-1'>* Iveskite El.Pasta !</li>");
        } else {
          $('#email').css({"border-color":"green"});
          $('#msg_email').empty();
        }

  if (tikrinimas === "True") {
    e.preventDefault();
  } else {
    $.ajax({
      url: "controler/createVartotojas.php",
      type: "POST",
      data: {
            vardas: vardas,
            pavarde: pavarde,
            slaptazodis: slaptazodis,
            mail: mail,
            adresas: adresas,
            miestas: miestas,
            pkodas: pkodas,
            salis: salis,
            telNumeris: telnum
          },
    success: function() {
      alert("Prisiregistravote !");
    }
  });
}
}); //REGISTRACIJOS FUNKCIJOS PABAIGA

//prisijungimas
//Tikrina ar visi laukai yra geri
//viska nusuncia i Db naudojant ajax
$('#Prisijungti').on('click', function() {
  let email = $('#prisijungimas').val();
  let password = $('#password').val();

  $.ajax({
  type: "POST",
  url: "controler/prisijungimas.php",
  data:{email: email, password: password},
  success: function(massage) {
      if (massage === "True") {
        alert('Pavyko prisijungti !');
        window.location.replace("index.php");
      } else if (massage === "False") {
        alert('Netiko El.pastas arba slaptazodis');
        location.reload();
      }
  }
});

}); //Prisijungimo funkcijos pabaiga


$('.pirkti').on('click', function(){
  var kiekis = $(this).parent().parent().parent().parent().find(".kiekis").val();
  let index = $(this).parent().parent().parent().parent().find(".index").val();
  $.ajax({
  type: "POST",
  url: "controler/prekeKrepselis.php",
  data:{kiekis: kiekis, index: index},
  success: function(count) {
    $('#krepselis').html('Krepselis(' + count + ')');
  }
});

}); //PIRKTI FUNKCIJOS PABAIGA

// Krepselio kiekio ir sumos keitimas funkcija
$('.krepselio_kiekis').on('change', function(){
  let kiekis = $(this).val();
  let index = $(this).parent().parent().find('.index').val();
  $(this).parent().parent().find('.kaina').html('veikia');
  console.log(kiekis);
  $.ajax({
  type: "POST",
  url: "controler/krepselioFunctions.php",
  data:{kiekis: kiekis, index: index},
  success: function(gryzo) {
    gryzoPaverstasIJSON = JSON.parse(gryzo);
    console.log("suveikia");
    $('.kaina'+index).html(gryzoPaverstasIJSON.kaina.toFixed(2) + ' &euro;');
    $('#visokaina').html('<strong>' + gryzoPaverstasIJSON.suma.toFixed(2) + ' &euro; </strong>');
    $('#visokiekis').html(gryzoPaverstasIJSON.visaskiekis.toFixed());
  }
});
}); //KREPSELIO KIEKIO ir sumos KEITIMAS


$('.radio').on('click', function(){
  let pasirinkimas = $(this).children().children().val();
  let visasuma = $('#visokaina').text().slice(0, 6);
  let skaicius = parseFloat(visasuma);
  console.log(pasirinkimas);
  if (pasirinkimas == "Kurjeris" ) {
    $('#siuntimas').html('3.50 &euro;');
    let kurejis = skaicius + 3.5;
    $('#visokaina').html(kurejis + '&euro;');
  } else {
    $('#siuntimas').html('0.00 &euro;');
    let parduotuve = skaicius - 3.5;
    $('#visokaina').html(parduotuve + '&euro;');
}
});
