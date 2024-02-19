
$(document).ready(function () {
    // Obtener el botón y agregar un listener para el clic
    $('#go-to-top-btn').click(function () {
        // Desplazarse suavemente hacia arriba
        $('html, body').animate({
            scrollTop: 0
        }, 'slow');
    });

    // Mostrar u ocultar el botón basado en la posición de desplazamiento
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) { // Muestra el botón cuando el usuario haya bajado 200px
            $('#go-to-top-btn').fadeIn();
        } else {
            $('#go-to-top-btn').fadeOut();
        }
    });
});
