<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Datos del Cliente
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $identificacion = $_POST["identificacion"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    //Datos del Vehículo
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];
    $direccion_tipo = $_POST["direccion_tipo"];
    $falla = $_POST["falla"];
    $tecnico = $_POST["tecnico"];
    //Muestra los datos del registro del vehículo ingresados por el usuario
    //Datos Cliente
    echo "<h2>Nombre: " . $nombre . "<br></h2>";
    echo "<h2>Apellido: " . $apellido . "<br></h2>";
    echo "<h2>Identificación: " . $identificacion . "<br></h2>";
    echo "<h2>Dirección: " . $direccion . "<br></h2>";
    echo "<h2>Telefono: " . $telefono . "<br></h2>";
    echo "<h2>Correo: " . $correo . "<br></h2>";
    //Datos Vehículo
    echo "<h2>Marca: " . $marca . "<br></h2>";
    echo "<h2>Modelo: " . $modelo . "<br></h2>";
    echo "<h2>Año: " . $ano . "<br></h2>";
    echo "<h2>Tipo de Dirección: " . $direccion_tipo . "<br></h2>";
    echo "<h2>Falla del Vehículo: " . $falla . "<br></h2>";
    echo "<h2>Técnico Asignado: " . $tecnico . "<br></h2>";
}
?>