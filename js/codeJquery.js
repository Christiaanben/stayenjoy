$(document).ready(function () {
    $(".containerDisplay").click(function () {
        if($(".navbar-collapse").is(":visible")){
            $('.navbar-collapse').collapse("toggle");
        }
    });
});