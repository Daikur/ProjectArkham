//----------------------------- CLASE CARRITO ---------------
function Carrito( cliente) {
    this.cliente = cliente;
    this.articulos = [];
    this.total = 0;
}

Carrito.prototype.anyade = function (productoId)
{
    this.articulos.push(this.listadoArticulos[productoId]);
    console.log(this.listadoArticulos[productoId]);
    
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

};