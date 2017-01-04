$(document).ready(function () {
    console.log('el documento está preparado');
//    $.ajax({
//        dataType: 'json',
//        type: 'GET',
//        url: './app/categorias.php',
//        success: function (data) {
////            $.each(data.categorias, function(i){
////                    console.log(data[i].categorias);
////
////
////            });
////
//            jQuery.each(data, function (index, value) {
//                console.log('element at index ' + index + ' is ' + value);
//                /*
//                 var cat = document.createElement("a");
//                 cat.className="list-group-item";
//                 cat.setAttribute("id",value.idCategoria);
//                 cat.href= "#";
//                 cat.appendChild(document.createTextNode(value.nombre));
//                 $("#categorias").append(cat);
//                 */
//
//                $("<a href='#' id=" + value.idCategoria + " class='list-group-item'>" + this.nombre + "</a>").appendTo("#categorias");
//
//            });
//
//
//
//        }
//
//
//    });

    $.ajax({
        dataType: 'json',
        type: 'GET',
        url: 'http://localhost/slim/api.php/categorias',
        success: function (data) {
            $.each(data, function (i) {
                console.log(data[i]);
            });
            jQuery.each(data, function (index, value) {
                console.log('element at index ' + index + ' is ' + value.Nombre);
                /*
                 var cat = document.createElement("a");
                 cat.className="list-group-item";
                 cat.setAttribute("id",value.idCategoria);
                 cat.href= "#";
                 cat.appendChild(document.createTextNode(value.nombre));
                 $("#categorias").append(cat);
                 */

                $("<li><a href='#' id=" + value.idCategoria + ">" + value.Nombre + "</a></li>").appendTo("#categorias");

            });

        }
    });
//    $.ajax({
//        dataType: 'json',
//        type: 'GET',
//        url: './app/carousel.php',
//        success: function(data){
//            console.log(data);
//            jQuery.each(data, function (index, value) {
//                console.log('element at index ' + index + ' is ' + value.src);
//
//                if (value.idImg == 0){
//                        $("<li data-target='#carousel-example-generic' data-slide-to="+index+" class ='active'></li>").appendTo(".carousel-indicators");
//                        $("<div id='img-active' class='item active'></div>").appendTo(".carousel-inner");
//                        $("<img class='slide-image' src="+value.src+" height="+200+"></img>").appendTo("#img-active");
//
//                }else{
//                        $("<li data-target='#carousel-example-generic' data-slide-to="+index+"></li>").appendTo(".carousel-indicators");
//                        $("<div id='img-inactive-"+value.idImg+"' class='item'></div>").appendTo(".carousel-inner");
//                        $("<img class='slide-image' src="+value.src+" height="+200+"></img>").appendTo("#img-inactive-"+value.idImg);
//                }
//
//
//
//
//                /*
//                 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
//                            <ol class="carousel-indicators">
//                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
//                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
//                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
//                            </ol>
//
//
//                            <div class="carousel-inner">
//                                <div class="item active">
//                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
//                                </div>
//                                <div class="item">
//                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
//                                </div>
//                                <div class="item">
//                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
//                                </div>
//                            </div>
//*/
//            });
//        }
//    });

});
