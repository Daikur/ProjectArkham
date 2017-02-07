//----------------------------- CLASE CARRITO ---------------
function Carrito(cliente) {
    this.cliente = cliente;
    this.listaProductosCarrito = [];
    this.total = 0;
}

Carrito.prototype.anyade = function (product) {
    console.log("PRODUCTO AÑADIDO AL CARRITO:");
    console.log(($.data(product, 'producto')));

    productoAnyadido = $.data(product, "producto");

    this.listaProductosCarrito.push($.data(product, 'producto'));

    console.log(this.listaProductosCarrito);
    //TODO change the style of the <p>
    $(`<div style='padding-bottom: 20px' id=container-linea-carrito><p style='float:left; padding-right:20px'><strong>` + productoAnyadido.nombre + `</strong>  -  ` + productoAnyadido.id + `  -  ` + productoAnyadido.fecha + ` -  ` + productoAnyadido.precio + `€</p>` + `
        <a class='btn-floating red bproducto' id='botonBorrar' onclick= carrito.eliminarProductoCarrito(this)  
          '><i class='material-icons'>delete</i></a><div>`).appendTo(`#carrito`);

    $('#botonBorrar').data('producto', productoAnyadido);


};

Carrito.prototype.eliminarProductoCarrito = function (product)
{
    productoAnyadido = $.data(product, "producto");
    alert(productoAnyadido.id);
    for (var i = 0; i < this.listaProductosCarrito.length; i++) {
        if (this.listaProductosCarrito[i].id === productoAnyadido.id) {
            this.listaProductosCarrito.splice(i);
            break;
        }
        console.log(this.listaProductosCarrito);
        $('div').remove('#container-linea-carrito');

    }

};

Carrito.prototype.totalCarrito = function ()
{
    tot = 0;

    for (i = 0; i < this.listaProductosCarrito.length; i++)
    {
        tot = tot + parseInt(this.listaProductosCarrito[i].precio);
    }
    this.total = tot;
    return tot;

};
//                 v----cambiar a gestionProductos----v
//---------------------Post Pedidos y detallepedidos----------------------------
Carrito.prototype.realizarPago = function () {
    pedido = new Pedido(1, "2016/01/27");
    fecha = "2016/01/27";
    //this.listaProductosPedido.push({idPedido: pedido.id});

    listaPedido = JSON.stringify(this.listaProductosCarrito);
    console.log(listaPedido);
    $.ajax({
        dataType: 'json',
        type: 'POST',
        data: {listaCarrito: this.listaProductosCarrito, usuario: 1, idPedido: 0, fecha: fecha},
        url: 'app/pedidos.php',
        success: function () {
            console.log("detallepedido creado");
        }
    });
};

//-------- Script del carrito-----
window.onload = function ()
{

    micarrito = new Carrito();

};