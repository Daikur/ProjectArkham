$(document).ready(function () {

 function getParameterByName(name, url) {
    if (!url) {
      url = window.location.href;
    }
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var categoria = getParameterByName('id');
console.log(categoria);

    $.ajax({
        dataType: 'json',
        type: 'GET',
        url: 'http://localhost/slim/api.php/productos/'+categoria,
        success: function (data){
            $.each(data, function (index, value) {
                console.log(value.nombre);
                
                
                $(`<div class='col s3 offset-s1'>
                   <div class='card'>
                        <div clas='card-image waves-effect waves-block waves-red'>
                            <img class='activator' src='assets/images/band.jpg'>
                        </div>
                        <div class='card-content'>
                            <span class='card-title activator grey-text text-darken-4'>`+value.nombre+`<i class='material-icons right'>more_vert</i></span>
                        </div>
                        <div class='card-reveal'>
                            <span class='card-title grey-text text-darken-4'>`+value.descripcion +`<i class='material-icons right'>close</i></span>
                            <div class='icon-product-container'>
                            <a class='btn-floating red' href='#'><i class='material-icons'>visibility</i></a>
                            <a class='btn-floating red ' href='#'><i class='material-icons'>shopping_cart</i></a>
                            </div>
                        </div>
                    </div>
                    </div>
                 `).appendTo('#productos');

            });
        }
    });
    
      
});