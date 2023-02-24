<?php 

// Validaciones 
if (isset($_POST['enviar'])) {
    if(strlen($_POST['nombreApe']) >= 20) {
        echo "<p class='error'>* El nombre y apellido es muy largo </p> "; 
    }
        
    if(strlen($_POST['alias']) >= 5) {
        echo "<p class='error'>* El alias es muy corto </p> "; 
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<p class='error'>* El email es inválido </p> "; 
    }

    if (strlen(intval($_POST['rut'])) > 8 ) {
        echo "<p class='error'>* El rut es inválido </p> "; 
    }
}

?>