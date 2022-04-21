require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function() {
    $('.dropbtn').click(function () {
        //rotates arrow next to "Thema's" button
        $(".HeaderArrow").toggleClass("rotate-180");
        //opens dropdown menu that shows themes
        $("#Themas").toggleClass("hidden");
        $("#MobileThemas").toggleClass("hidden");
    });

    //opens/closes hamburger menu in mobile
    $('.MobileMenuButton').click(function () {
        $("#dropdown-content").toggleClass("hidden");
    });

    //controls the editor for the HousekeepingHome.html table
    $('.ToggleEdit').click(function () {
        $("#popup").toggleClass("hidden");
        $("#popup2").toggleClass("hidden");
        $("#editbtn").toggleClass("hidden");
        $("#cancelbtn").toggleClass("hidden");
        $("#savebtn").toggleClass("hidden");
    });

    $('#DeleteTrip').click(function () {
        $("#ConfirmTxt").toggleClass("hidden");
    });

    // AddPerson
    var cloneCount = 1;
    $('#del').click(function(e) {
        e.preventDefault();
        var del = document.querySelectorAll('.del').length;
        if (del > 1) {;
            $(".del:last").remove();
            prijs();
            $(".date").trigger("change");
            cloneCount -= 1;
        }

    });
    //DelPerson
    $('#ep').click(function(e) {
        e.preventDefault();
        var element = $('#copy');
        $("#container").append(element.html().replaceAll('_', '_'+ cloneCount++));
        prijs();
        $(".date").trigger("change");
    });

    prijs();
    $(".date").trigger("change");
    // age and price
    function prijs() {
        var ditjaar = new Date().getFullYear();
        var kindB = 10;
        var volB = 15;
        var kindP = "€"+kindB+",-";
        var volP = "€"+volB+",-";
        var tel = 1;
        var pricep = "price_";
        var datep = "date_";
        $('.date').change(function prijsC() {
            var price = pricep;
            var date = datep
            var total = 0;
            var tel = 1;
            $('.date').each(function () {;
                var datum = document.getElementById(date).value;
                if(datum.slice(0, 4) > ditjaar - 12){
                    document.getElementById(price).innerHTML = kindP;
                    total += kindB;
                }else{
                    document.getElementById(price).innerHTML = volP;
                    total += volB;
                }
                date = datep.replace('_', '_'+ tel);
                price = pricep.replace('_', '_'+ tel++);
            });
            var totalPrice ='€'+ total+ ',-';
            $('#totalPrice').html(totalPrice);
        });
    }
})

