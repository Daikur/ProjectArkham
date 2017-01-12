$(document).ready(function() {
    
    

$('.slider').slider('start');

    

    $.ajax({
        dataType: 'json',
        type: 'GET',
        url: 'http://localhost/slim/api.php/categorias',
        success: function (data){
            $.each(data, function (index, value) {
                console.log(value.nombre);
                
                $("<li class='waves-effect waves-red'><a href='#'><span>"+value.nombre+"</span></a></li>").appendTo("#categorias");
                $("<li><a href='#'>"+value.nombre+"</a></li>").appendTo("#nav-mobile");
            });
            
            
        }
        
    });


});
