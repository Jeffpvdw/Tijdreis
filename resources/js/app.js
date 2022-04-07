require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function(){
  $('.dropbtn').click(function(){
    //rotates arrow next to "Thema's" button
    $(".HeaderArrow").toggleClass("rotate-180");
    //opens dropdown menu that shows themes
    $("#Themas").toggleClass("hidden");
    $("#MobileThemas").toggleClass("hidden");
  });

  //opens/closes hamburger menu in mobile
  $('.MobileMenuButton').click(function(){
    $("#dropdown-content").toggleClass("hidden");
  });

  //controls the editor for the HousekeepingHome.html table
  $('.ToggleEdit').click(function(){
    $("#popup").toggleClass("hidden");
    $("#popup2").toggleClass("hidden");
    $("#editbtn").toggleClass("hidden");
    $("#cancelbtn").toggleClass("hidden");
    $("#savebtn").toggleClass("hidden");
  });

  //Shows a popup to warn before deletion table
  $('.DeleteTrip').click(function(){
    $("#ConfirmTxt").toggleClass("hidden");
  })
  $('#CustomerEdit').click(function(){
    $("#CusConfirm").toggleClass("hidden");
  })
});