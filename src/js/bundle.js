jQuery(document).ready(function($) {

    // BOTON UP
    var up = $('.up');
    $(window).scroll(function(event) {
        var scroll = $(this).scrollTop();

        if (scroll > 700) {
            up.addClass("visible");
        } else {
            up.removeClass("visible");
        }
    });

    // MENU PLATILLOS
    jQuery(function($) {
        $("#menu-platillos > div").not(":first").hide();

        $("#nav-platillos li:first-child a").addClass("active");

        $("#nav-platillos li a").on("click", function() {
            $("#nav-platillos li a").removeClass("active");

            $(this).addClass("active");

            var enlace = $(this).attr("href");

            $("#menu-platillos > div").hide();
            console.log(enlace);
            $(enlace).fadeIn("slow");

            return false;
        });
    });

});