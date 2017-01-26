var product = {
    id: "",
    name: "",
    precio: "",
    idCategoria: "",
    descripcion: ""
};




$(document).ready(function () {
    carrito = new Carrito("armonic");
    function getParameterByName(name, url) {
        if (!url) {
            url = window.location.href;
        }
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
                results = regex.exec(url);
        if (!results)
            return null;
        if (!results[2])
            return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    var categoria = getParameterByName('id');
    var listaProductos = [];
    $.ajax({
        dataType: 'json',
        type: 'GET',
        url: 'http://localhost/slim/api.php/productos/' + categoria,
        success: function (data) {
            $.each(data, function () {
                product = {
                    id: this.id,
                    name: this.nombre,
                    precio: this.precio,
                    idCategoria: this.idCategoria,
                    descripcion: this.descripcion
                };
                listaProductos.push(product);

                $(`<div class='col s3 offset-s1'>
                   <div class='card z-depth-5 '>
                        <div clas='card-image waves-effect waves-red'>
                            <img width='100%' class='activator' src='assets/images/` + this.imagenes + `'>
                        </div>
                        <div class='card-content'>
                            <span class='card-title activator grey-text text-darken-4'>` + this.nombre + "  - " + this.precio + "€" + `<i class='material-icons right'>more_vert</i></span>
                        </div>
                        <div class='card-reveal'>
                            <span class='card-title grey-text text-darken-4'>` + this.descripcion + `<i class='material-icons right'>close</i></span>
                            <div class='icon-product-container'>
                            <a class='btn-floating red' href='#'><i class='material-icons'>visibility</i></a>
                            <a class='btn-floating red bproducto' id=` + this.id + ` name=` + this.nombre + ` idCat=` + this.idCategoria + ` onclick= cargaModal(this)  href='#modal-compra'><i class='material-icons'>shopping_cart</i></a>
                        </div>
                        </div>
                    </div>
                    </div>
                 `).appendTo('#productos');


            });
            console.log(listaProductos);


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
function cargaModal(p) {
    console.log('id:' + p.id);
    console.log('nombre:' + p.name);
    console.log('precio:' + p.precio);
    console.log('idCategoria:' + p.idCat);
    producto = new Producto(p.id, p.name, p.descripcion, p.precio, p.idCat);
    $(`<div class="modal-content">
      <h4>` + producto.name + `</h4>
      <p>A bunch of text</p>
      <p>Seleccione una fecha: </p><input type="date" class="datepicker">
      <p>Precio: ` + producto.precio + `</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
      <a href='#modal-carrito' class='modal-action modal-close waves-effect waves-green btn-flat' onclick= carrito.anyade(producto)>Añadir al Carrito</a>
    </div>
  </div>`).appendTo('#modal-compra');
}

$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
});


$(`<div class="modal-content">
                    <h4>Carrito</h4>
                    <div id='carrito'>`);
$.each(carrito.articulos, function (index, value) {
    `<p>` + value.id + `<p>`
}`
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Realizar Pago</a>
                </div>
            </div>`).appendTo("#modal-carrito");