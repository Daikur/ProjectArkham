$(document).ready(function() {
    
    $.ajax({
        dataType: 'json',
        type: 'GET',
        url: 'http://localhost/slim/api.php/categorias',
        success: function (data){
            $.each(data, function (index, value) {
                console.log(value.nombre);
                
                $("<li class='waves-effect waves-red'><a href='./productos.html?id="+value.id+"'><span>"+value.nombre+"</span></a></li>").appendTo("#categorias");
                $("<li class='waves-effect waves-red'><a href='./productos.html?id="+value.id+"'>"+value.nombre+"</a></li>").appendTo("#nav-mobile");
            });
        }
    });
    
    
    
    //metodo utilizada para recoger el parametro por url 
    //http://stackoverflow.com/questions/901115/how-can-i-get-query-string-values-in-javascript
    
   /* function getParameterByName(name, url) {
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
*/
});
