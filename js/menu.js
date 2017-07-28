$(document).ready(main);

var contador = 1;

function main() {
    $('.menu-op i').click(function() {
        if (contador == 1) {
            // $('.menu').css("display", "inline-block");
            $('nav').animate({
                left: '0'
            }, 800);
            // $('nav').animate({
      			// 	marginLeft: '0'
      			// },800);
            // $('.menu-openclose').css("width", "31%");
            // $('.menu-openclose .close').removeClass("oculto");
            // $('.menu-openclose .close').css("float", "right");
            // $('.menu-openclose .open').css("display", "none");
            contador = 0;
        } else {
            contador = 1;
            // $('.menu').css("display", "none");
            $('nav').animate({
                left: '-100%'
            }, 800);
            // $('.menu-openclose').css("width", "100%");
            // $('.menu-openclose .close').addClass("oculto");
            // $('.menu-openclose .open').css("display", "block");
        }
    });

    // Mostramos y ocultamos submenus
    // $('.submenu').click(function() {
    //     $(this).children('.children').slideToggle();
    // });
}
