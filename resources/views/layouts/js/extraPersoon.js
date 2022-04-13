$(document).ready(function(){

    var cloneCount = 1;

    $("#ep").click(function(e) {
        e.preventDefault();
        var element = $('#copy');
        $("#container").append(element.html().replaceAll('_', '_'+ cloneCount++));
    });
});
