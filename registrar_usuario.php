<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Datos del usuario
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    //Muestra los datos usuario
    echo "<h2>Usuario: " . $usuario . "<br></h2>";
    echo "<h2>Clave: " . $contraseña . "<br></h2>";
}
?>