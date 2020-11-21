<?php

include "BD/baseDatos.php";

$transaccion = new BaseDatos();
$conexion = $transaccion->conectarBD();

if(isset($_POST['btnGuardar']))
{
  if(strlen($_POST['nombreProd1']) >= 1 && strlen($_POST['marcaProd1']) >= 1 && strlen($_POST['precioProd1']) > 0 && strlen($_POST['descripcionProd1']) >= 1)
  {
        $nombreProd1 = $_POST['nombreProd1'];
        $marcaProd1 = $_POST['marcaProd1'];
        $precioProd1 = $_POST['precioProd1'];
        $descripcionProd1 = $_POST['descripcionProd1'];
        $foto = trim($_POST['foto']);
        $fecha_registro = date("y/m/d");


        $consulta = "INSERT INTO productos(nombreProd, marcaProd, precioProd, descripcionProd, fecha_registro, foto) VALUES ('$nombreProd1', '$marcaProd1', '$precioProd1', '$descripcionProd1', '$fecha_registro', '$foto')";
        $transaccion->agregarDatos($consulta);

        $consulta = "SELECT * productos ORDER BY idProd DESC LIMIT 1";      
        $data = $transaccion->consultarDatos($consulta);

        $_SESSION['mensaje'] = "Has agregado correctamente tu producto.";
        $_SESSION['tipo-mensaje'] = "success";
        
      
        header("Location: listaProductos.php");
  }

      
}
?>