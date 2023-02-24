<?php 

include("con_db.php");
include("validacion.php");

if (isset($_POST['enviar'])) {
        $nombreApe = $_POST['nombreApe'];
        $alias = $_POST['alias'];
        $email = $_POST['email'];
        $rut = $_POST['rut'];
        $region = $_POST['region'];
        $comuna = $_POST['comuna'];
        $candidato = $_POST['candidato'];
        $nosotros = $_POST['nosotros'];
        $consulta = "INSERT INTO formulario (nombreApe,alias,email,rut,region,comuna,candidato,nosotros) VALUES ('$nombreApe','$alias','$email','$rut','$region','$comuna','$candidato','$nosotros')";
        $resultado = mysqli_query($conex,$consulta);
            
        if ($resultado){
            ?>
            <h3 class="valido">  ¡ Has enviado el formulario correctamente ! </h3>
            <?php
        } else {
            ?>
            <h3 class="inválido"> ¡Completa los campos </h3>
            <?php
        }
    }  
?>


