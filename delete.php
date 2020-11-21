<?php include "BD/baseDatos.php";

    $transaccion = new BaseDatos();
    $transaccion->conectarBD();
    if(isset($_GET['idProducto']))
    {
        $idProducto = $_GET['idProducto'];
        $consulta = "DELETE FROM productos WHERE idProducto='$idProducto' ";
        $transaccion->eliminarDatos($consulta);

        $_SESSION['mensaje'] = "Has eliminado correctamente tu producto.";
        $_SESSION['tipo-mensaje'] = "danger";

        header("Location: listaProductos.php");

    }


?>