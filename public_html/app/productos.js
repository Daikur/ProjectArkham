$(document).ready(function() {

var listaProductos = [];
var listadoArticulos = [];
micarrito = new Carrito('daw');

micarrito.articulos = listaProductos;

 
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


    $.ajax({
        dataType: 'json',
        type: 'GET',
        url: 'http://localhost/slim/api.php/productos/'+categoria,
        success: function (data){
            $.each(data, function (index, value) {
                articulo = new Articulo(value.id, value.nombre, value.descripcion, value.precio, value.idCategoria);
                console.log(articulo);
                listadoArticulos.push(articulo);
                $(`<div class='col s3 offset-s1'>
                   <div class='card z-depth-5 '>
                        <div clas='card-image waves-effect waves-red'>
                            <img width='100%' class='activator' src='assets/images/`+value.imagenes+`'>
                        </div>
                        <div class='card-content'>
                            <span class='card-title activator grey-text text-darken-4'>`+value.nombre+"  - "+value.precio+"€"+`<i class='material-icons right'>more_vert</i></span>
                        </div>
                        <div class='card-reveal'>
                            <span class='card-title grey-text text-darken-4'>`+value.descripcion +`<i class='material-icons right'>close</i></span>
                            <div class='icon-product-container'>
                            <a class='btn-floating red' href='#'><i class='material-icons'>visibility</i></a>
                            <a class='btn-floating red bproducto' id=`+value.id+` href='#modal-carrito'><i class='material-icons'>shopping_cart</i></a>
                            </div>
                        </div>
                    </div>
                    </div>
                 `).appendTo('#productos');
                
                        $('#productos').on('click','.bproducto',function(){
                micarrito.anyade(this.id - 1);
                 
            });    
            });



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
    
    $('input.autocomplete').autocomplete({
    data: {
      "Apple": null,
      "Microsoft": null,
      "Google": 'http://placehold.it/250x250'
    }
  });
  
   

});
