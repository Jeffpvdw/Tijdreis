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
    })
})
$(document).ready(function() {
    // AddPerson
    var cloneCount = 1;
    $("#ep").click(function(e) {
        e.preventDefault();
        prijs();
        var element = $('#copy');
        $("#container").append(element.html().replaceAll('_', '_'+ cloneCount++));
        prijs();
    });

    // age and price
    prijs();
});

function prijs(){
    var ditjaar = new Date().getFullYear();
    var kindP = "€5,-";
    var volP = "€10,-";
    var tel = 1;
    var pricep = "price_";
    var datep = "date_"
    console.log('test')

    $('.date').change(function prijs() {
        console.log('test1')
        var price = pricep;
        var date = datep
        var total = 0;
        $('.date').each(function () {
            console.log('test2')
            tel = 1;
            var datum = document.getElementById(date).value;
            if(datum.slice(0, 4) > ditjaar - 12){
                document.getElementById(price).innerHTML = kindP;
                total += 5;
            }else{
                document.getElementById(price).innerHTML = volP;
                total += 10;
            }
            date = datep.replace('_', '_'+ tel);
            price = pricep.replace('_', '_'+ tel++);
        });
        var totalPrice ='€'+ total+ ',-';
        $('#totalPrice').html(totalPrice);
    });
};
