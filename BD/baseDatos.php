<?php 

class BaseDatos {

//atributos == variables
public $usuarioBD="root";
public $passwordBD="";



//funcion especial que se llama constructor
public function __construct(){}


//metodos== funciones
public function conectarBD(){

    try{

        $infoDB="mysql:host=localhost;dbname=producto";
        $conexionBD=new PDO($infoDB,$this->usuarioBD,$this->passwordBD);
        session_start();
        return($conexionBD);

    }catch(PDOException $error){

        echo($error->getMessage());  

    }



}

public function agregarDatos($consultaSQL)
{
    $conexionBD = $this->conectarBD();
    $agregarDatos = $conexionBD->prepare($consultaSQL);
    $resultado = $agregarDatos->execute();
    

    if($resultado)
        {
              ?> 
                 <h3 class="alert alert-success mt-5 text-center">Has inscripto correctamente tu producto.</h3>
             <?php
        }
        else
        {
            ?> 
              <h3 class="alert alert-success mt-5 text-center">Ha ocurrido un error</h3>

             <?php
        }
}

public function consultarDatos($consultaSQL){

    //1.Conectarme a la base de datos
    $conexionBD=$this->conectarBD();

    //2.Preparar la consulta que se va a realizar
    $consultaBuscarDatos= $conexionBD->prepare($consultaSQL);

    //3. Definir la forma en la que vmos a traer los datos
    // setFetchMode
    $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

    //4.Ejecutar la consulta
    $consultaBuscarDatos->execute();

    //5. Retornar los datos consultados
    return($consultaBuscarDatos->fetchAll());



}

public function editarDatos($consultaSQL)
{
    $conexion = $this->conectarBD();
    $editarDatos = $conexion->prepare($consultaSQL);
    $resultado = $editarDatos->execute();
}

public function eliminarDatos($consultaSQL)
{
    $conexion = $this->conectarBD();
    $eliminarDatos = $conexion->prepare($consultaSQL);
    $resultado = $eliminarDatos->execute();
}



}







?> 