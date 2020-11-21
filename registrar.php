<?php

include "BD/baseDatos.php";


 if(isset($_POST['enviarProd']))
{
    if(strlen($_POST['nombreProd']) >= 1 && strlen($_POST['marcaProd']) >= 1 && strlen($_POST['precioProd']) > 0 && strlen($_POST['descripcionProd']) >= 1)
    {
        $nombreProd = trim($_POST['nombreProd']);
        $marcaProd = trim($_POST['marcaProd']);
        $precioProd = trim($_POST['precioProd']);
        $descripcionProd = trim($_POST['descripcionProd']);
        $fecha_registro = date("y/m/d");
        $foto = trim($_POST['foto']);
        $transaccion = new BaseDatos();
        $transaccion->conectarBD();
        $consulta = "INSERT INTO productos(nombreProd, marcaProd, precioProd, descripcionProd, fecha_registro, foto) VALUES ('$nombreProd', '$marcaProd', '$precioProd', '$descripcionProd', '$fecha_registro', '$foto')";
        $transaccion->agregarDatos($consulta);   
        
        $_SESSION['mensaje'] = "Has agregado correctamente tu producto.";
        $_SESSION['tipo-mensaje'] = "success";

        header("Location: listaProductos.php");
      }  

}else
{
   header("Location:registrar-prod.php");
}
