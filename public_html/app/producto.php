<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "armonic";
$listaProductos = json_decode($_GET['listaCarrito']);
$listaFechaProductos = json_decode($_GET['listaFechaProducto']);
$usuario = $_GET['usuario'];
$idPedido = $_GET['idPedido'];
$fecha = $_GET['fecha'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$peticionIdPedido = "SELECT MAX(idPedido) from pedidos";
$idPedido = $conn->query($peticionIdPedido);
$idPedido = $idPedido + 1;
$fecha = time();
$fecha = (string) $fecha;
$sql = "INSERT INTO Pedidos (idCliente, fecha)
VALUES ($usuario,$fecha);";
$seguir = true;
foreach ($listaProductos as $producto) {
    $idProducto = $producto->id;
    $fecha = $producto->fecha;
    $precio = $producto->precio;
    $sql = "INSERT INTO detallepedidos (idPedido, idProducto, fecha, precio) VALUES ($idPedido, $idProducto, $fecha,$precio)";
    if ($conn->query($sql) === TRUE) {
        $resultado = "Su pedido ha sido procesado.";
    } else {
        $resultado = "Error al procesar su pedido.";
        $sql = "DELETE From pedidos where idPedido=$idPedido";
        $conn->query($sql);
        $seguir = false;
    }
}
//$sql1 .= "INSERT INTO detallePedidos (firstname, lastname, email)
//VALUES ('Mary', 'Moe', 'mary@example.com');";
////$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
////VALUES ('Julie', 'Dooley', 'julie@example.com')";
//
//if (mysqli_multi_query($conn, $sql)) {
//    echo "New records created successfully";
//} else {
//    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//}
mysqli_close($conn);
?>