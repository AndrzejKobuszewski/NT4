// hamburger
function myFunction(x) {
         x.classList.toggle("change");
        var menu = document.querySelectorAll(".menu");
        var menuCont = document.querySelectorAll(".menu-test-container");

            if (menu[0].style.display === "inline-block") {
            menu[0].style.display = 'none';
            menuCont[0].style.display = 'none';}
            else {
            menu[0].style.display = 'inline-block';
            menuCont[0].style.display = 'inline-block';}
        }
//cog
function rotateCogs() {
    var cogs = document.querySelectorAll(".cog");
    cogs[0].style.animation = "rspin 3s infinite";
        for(var i =1; i<= cogs.length; i++) {
          cogs[i].style.animation = "spin 3s infinite";
            }
      }
//style submenu userAccount
function styleUSAH($this) {
  var smloguj = document.getElementById('zaloguj');
  var smmdane=document.getElementById('mdane');
  var smpass=document.getElementById('password');
  var smzarejestruj=document.getElementById('zarejestruj');

  var smenu = [smloguj, smmdane, smpass, smzarejestruj];

  var loginForm = document.querySelector(".UserAccountContainerForm");
  var myDataForm = document.querySelector(".myDataForm");
  var pswRemindForm = document.querySelector(".pswRemindForm");
  var regForm = document.querySelector(".RegFormIn");

  var forms = [loginForm, myDataForm, pswRemindForm, regForm];

  for (var i =0; i<=smenu.length; i++) {
    if (!smenu[i]) {} else{
      smenu[i].style.border = 'none';
      smenu[i].style.bordertop = '2px solid white';
      forms[i].style.display = 'none';
      if ($this===smenu[i]){var j = i;}
    }
  }

  forms[j].style.display = 'block';
  $this.style.border = '2px solid #009dda';

}
// function verifyMyMail() {
//   var email = ;
//   var psw1=;
//   var psw2=;
//   if(weryfikuj email){}else{}
//   if(weryfikuj psw1 i równość psw1i psw2){}else{}
//
// }
// function verifyRegForm(x) {
// var form = document.querySelector("form");
// console.log(form);
// var name= document.getElementById("loginname");
// console.log(name);
// var pass = document.getElementById("psw");
// console.log(pass);
//
// var errorMessage = document.querySelector(".headerForm h3");
// console.log(errorMessage);
//
// form.addEventListener("submit", function (event) {
//     console.log("testsubmit");
//     errorMessage.innerHTML = "";
//
//
//       if(name.value.length<3) {
//         event.preventDefault();
//         errorMessage.innerText += "Twoja nazwa jest za krótka \n"
//
//     }
//       if(pass.value.length<6) {
//         event.preventDefault();
//         errorMessage.innerText += "Twoje hasło jest nieodpowiednie \n"
//
//     }
// }
// }

// //typing
 document.addEventListener("DOMContentLoaded", function(event) {

    var MobilityIsAllAbout = document.querySelectorAll(".MobilityIsAllAbout");
    var Allabout = ['<h2>TWOJĄ PODRÓŻ</h2>','<h2>PODRÓŻNYCH</h2>','<h2>USŁUGI</h2>', '<h2>CZAS</h2>','<h2>ŚRODOWISKO</h2>', '<h2>STYL ŻYCIA</h2>', '<h2>BYCIE "SMART"</h2>', '<h2>BYCIE "GREEN"<h2>','<h2>ZRÓWNOWAŻONY ROZWÓJ</h2>','<h2>ZARZĄDZANIE OPARTE O FAKTY</h2>',
     '<h2>DOSTĘPNOŚĆ</h2>','<h2>PRZEPŁYW INFORMACJI</h2>','<h2>UX</h2>', '<h2>CZAS</h2>', '<h2>PIENIĄDZE</h2>', '<h2>CYFRYZACJĘ</h2>', '<h2>POSTĘP</h2','</h2>INTERMODALNOŚĆ</h2>' ];

    function dodajSlowo(){
        var r = Math.floor(Math.random() * (Allabout.length-1));
        MobilityIsAllAbout[0].innerHTML = "w Mobilności chodzi o: \n" + Allabout[r];
          }
// events and function calls
  dodajSlowo();
  MobilityIsAllAbout.addEventListener('mouseover', function (){dodajSlowo();});

// verify form login


});
// userAccount handling Page
