require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

$(document).ready(function () {
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

    $('#clipboard').click(function () {
        $("#cat").toggleClass("hidden");
        setTimeout(function () {
            $("#cat").toggleClass("hidden");
        }, 1000)
    });

    // AddPerson
    var cloneCount = 1;
    $('#del').click(function (e) {
        e.preventDefault();
        var del = document.querySelectorAll('.del').length;
        if (del > 1) {
            ;
            $(".del:last").remove();
            prijs();
            $(".date").trigger("change");
            cloneCount -= 1;
        }

    });
    //DelPerson
    $('#ep').click(function (e) {
        e.preventDefault();
        var element = $('#copy');
        $("#container").append(element.html().replaceAll('_', '_' + cloneCount++));
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
        var kindP = "€" + kindB + ",-";
        var volP = "€" + volB + ",-";
        var tel = 1;
        var pricep = "price_";
        var datep = "date_";
        $('.date').change(function prijsC() {
            var price = pricep;
            var date = datep
            var total = 0;
            var tel = 1;
            $('.date').each(function () {
                ;
                var datum = document.getElementById(date).value;
                if (datum.slice(0, 4) > ditjaar - 12) {
                    document.getElementById(price).innerHTML = kindP;
                    total += kindB;
                } else {
                    document.getElementById(price).innerHTML = volP;
                    total += volB;
                }
                date = datep.replace('_', '_' + tel);
                price = pricep.replace('_', '_' + tel++);
            });
            var totalPrice = '€' + total + ',-';
            $('#totalPrice').html(totalPrice);
        });
    }
});

function prijs() {
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
            if (datum.slice(0, 4) > ditjaar - 12) {
                document.getElementById(price).innerHTML = kindP;
                total += 5;
                console.log('kid')
            } else {
                document.getElementById(price).innerHTML = volP;
                total += 10;
                console.log('grownup')
            }
            date = datep.replace('_', '_' + tel);
            price = pricep.replace('_', '_' + tel++);
        });
        var totalPrice = '€' + total + ',-';
        $('#totalPrice').html(totalPrice);
    });

};

//easter egg
var EasterCount = 0;
$(document).keyup(function (evt) {
    if (evt.keyCode == "90") {
        EasterCount += 1;
        if (EasterCount == 50) {
            $("#EasterEgg").toggleClass("hidden");
        } else if (EasterCount == 51) {
            $("#EasterEgg").toggleClass("hidden");
        }
    }
    ;
});

$('#message').keyup(function() {
    var text_value = document.getElementById('message').value;

    if (text_value.includes("Pict21vB is de beste klas") === true && EasterCount == 0) {
        $("#EasterEgg").toggleClass("hidden");
        EasterCount ++;
    } else if (text_value.includes("coderen is soms saai") === true && EasterCount == 0) {
        document.getElementById("EggImg").src="https://images.unsplash.com/photo-1604488912264-dfed70450d76?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=922";
        $("#EasterEgg").toggleClass("hidden");
        EasterCount ++;
    }
});
