$(document).ready(function() {
    console.log("Hola ");

    $.ajax({
        dataType: 'json',
        type: 'GET',
        url: 'http://localhost/slim/api.php/categorias',
        success: function (data){
            $.each(data, function (i){
                console.log(data[i]);
                console.log(data[i].name);
            });



        }
    });


});
