<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armonic";

$listaProductos = json_decode($_GET['listaCarrito']);
$usuario = $_GET['usuario'];
$fecha = $_GET['fecha'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO Pedidos (idCliente, fecha) VALUES ($usuario,$fecha);";
if ($conn->query($sql) === TRUE) {
    $resultado = "Su pedido ha sido procesado.";
} else {
    $resultado = "Error al procesar su pedido.";
}

$peticionIdPedido = "SELECT MAX(idPedido) from pedidos";
$idPedido = $conn->query($peticionIdPedido);

//echo $idPedido;
//$idPed = inval($idPedido,10);
//$idPedido = $idPedido + 1;
//
$seguir = true;
foreach ($listaProductos as $producto) {
    $idProducto = $producto->id;
    $Fecha = $producto->fecha;
    $Precio = $producto->precio;
    $sql = "INSERT INTO detallepedidos (idPedido, idProducto ,precio, Fecha) VALUES ($idPedido, $idProducto, $Precio, $fecha)";
    if ($conn->query($sql) === TRUE) {
        $resultado = "Su detallepedido ha sido procesado.";
    } else {
        $resultado = "Error al procesar su detallepedido.";
        //$sql = "DELETE From pedidos where idPedido=$idPedido";
        //$conn->query($sql);
        $seguir = false;
    }
}
echo json_encode($resultado);

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>