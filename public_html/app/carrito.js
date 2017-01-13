// ---------------------------- CLASE ARTICULOS --------------------

function Articulo(id, nombre, descripcion, precio, idCategoria) {
    this.id = id;
    this.nombre = nombre;
    this.descripcion = descripcion;
    this.precio = precio;
    this.idCategoria = idCategoria;
}


//----------------------------- CLASE CARRITO ---------------

function Carrito( cliente) {
    this.cliente = cliente;
    this.articulos = [];
    this.total = 0;
}

Carrito.prototype.anyade = function (articuloId)
{
    this.articulos.push(this.listadoArticulos[articuloId]);
    console.log(this.listadoArticulos[articuloId]);
    
    
};


Carrito.prototype.mostrar = function ()
{
    for(i = 0; i < this.articulos.length; i++){
        ticket += this.articulos[i].id + '\n';
    }
    
    ticket += "total carrito: " + this.totalCarrito() + "€";
    return ticket;
};

Carrito.prototype.totalCarrito = function()
{
    tot = 0;
    
    for(i = 0 ; i < this.articulos.length; i++) 
    {
        tot = tot + parseInt(this.articulos[i].precio);
    }
    this.total = tot;
    return tot;
        
};

//-------- Script del carrito-----

window.onload = function ()
{

    micarrito = new Carrito();



    function f2() {
        micarrito.mostrar();
    }
    function f3() {
        alert(micarrito);
        alert(JSON.stringify(micarrito));
    }


// ----- añadimos eventos -----
    function On_click() {

    }
    fotos = document.getElementsByTagName('img');
    for (var i = 0; i < fotos.length; i++) {
        fotos[i].addEventListener("click", On_click, false);

    }


    Array.prototype.indexOf = function (objeto) {
        var resultado = -1;
        for (var i = 0; i < this.length; i++) {
            if (this[i] == objeto) {
                resultado = i;
                break;
            }
        }
        return resultado;
        
    }
    

}