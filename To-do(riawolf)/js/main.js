// test
console.log("labas");
// alert("issokanti zinute");
// document.write("labas ekrane");


$('#forma').on("click", function(error) {
  let pavadinimas = $('#pavadinimas').val();
  let tekstas = $('#tekstas').val();
  let tikrinimas = "false";

  console.log(tekstas,pavadinimas);
  if (pavadinimas === "") {
    $('#pavadinimas').css({"border-color":"red"});
    $('#msg_pavadinimas').html("<p class='bg-warning mt-1'>* Iveskite pavadinima !</p>");
    tikrinimas = "True";
  } else {
              $('#pavadinimas').css({"border-color":"green"});
              $('#msg_pavadinimas').empty();
         }
  if (tekstas === "") {
    $('#tekstas').css({"border-color":"red"});
    $('#msg_antraste').html("<p class='bg-warning mt-1'>* Iveskite darbo uzduoti !</p>");
    tikrinimas = "True";
  } else {
              $('#tekstas').css({"border-color":"green"});
              $('#msg_antraste').empty();
         }

  if (tikrinimas === "True") {
     error.preventDefault();
   } else {
     $.ajax({
       url: "controler/createTeksta.php",
       type: "POST",
       data: {
             pavadinimas: pavadinimas,
             antraste: tekstas
           },
     success: function() {
       alert("pavyko!")
     }
   });
 }

});
