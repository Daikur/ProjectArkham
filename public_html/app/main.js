$(document).ready(function () {

    $.ajax({
        dataType: 'json',
        type: 'GET',
        url: 'http://localhost/slim/api.php/categorias',
        success: function (data) {
            $.each(data, function (index, value) {
                console.log(value.nombre);

                $("<li class='waves-effect waves-red'><a href='./productos.php?id=" + value.id + "'><span>" + value.nombre + "</span></a></li>").appendTo("#categorias");
                $("<li class='waves-effect waves-red'><a href='./productos.php?id=" + value.id + "'>" + value.nombre + "</a></li>").appendTo("#nav-mobile");
            });
        }
    });

    $.ajax({
        dataType: 'json',
        type: 'GET',
        url: 'http://localhost/slim/api.php/ofertas',
        success: function (data) {
            $.each(data, function (index, value) {
                console.log(value.ruta);

                $("<li><img src=assets/images/ofertasimg/" + value.ruta + "></img><div class='caption center-align '><h3>" + value.titulo + "</h3><h5 class='light grey-text text-lighten-3'>" + value.descripcion + "</h5></div></li>").appendTo("#slider");

            });

            $(document).ready(function () {
                $('.slider').slider({full_width: true});
            });


            // Pause slider
            $('.slider').slider('pause');
// Start slider
            $('.slider').slider('start');
// Next slide
            $('.slider').slider('next');
// Previous slide
            $('.slider').slider('prev');
        }
    });

    $('.modal').modal();
    $('.modal').modal({
        dismissible: true, // Modal can be dismissed by clicking outside of the modal
        opacity: .10, // Opacity of modal background
        in_duration: 300, // Transition in duration
        out_duration: 200, // Transition out duration
        starting_top: '4%', // Starting top style attribute
        ending_top: '10%', // Ending top style attribute
        ready: function (modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            console.log(modal, trigger);
        },
        complete: function () {
        }
    });

});
