<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de votación</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="box">
    <h3>FORMULARIO DE VOTACIÓN:</h3>
    
        <form method="post" action="index.php">

            <label>Nombre y Apellido</label>
            <input type="text" name="nombreApe" required>
            <br>

            <label>Alias</label>
            <input type="text" name="alias" required><br>

            <label>Email</label>
            <input type="text" name="email" required<br>

            <label>RUT</label>
            <input type="number" name="rut" required><br>

            <label>Región</label>
            <select name="region" id="region" required>
                <option value="" selected="selected">Selecciona Región</option>
            </select><br>
            
            <label>Comuna</label>
            <select name="comuna" id="comuna" required>
                <option value="" selected="selected">Selecciona Comuna</option>
            </select><br>

            <label>Candidato</label>
            <select name="candidato" required>
                <option value="" selected="selected">Selecciona Candidato</option>
                <option value="Donatello">Donatello</option>
                <option value="Rafael">Rafael</option>
                <option value="Leonardo">Leonardo</option>
            </select><br>

            <div class="formularioCheBox">
                <label for="nosotros">¿Cómo se enteró de nosotros?</label>
                <div>
                    <label for="web"><input type="checkbox" name="nosotros" id="web" value="web"> Web</label>
                    <label for="tv"><input type="checkbox" name="nosotros" id="tv" value="tv"> TV</label>
                    <label for="rrss"><input type="checkbox" name="nosotros" id="rrss" value="rrss"> Redes Sociales</label>
                    <label for="amigo"><input type="checkbox" name="nosotros" id="amigo" value="amigo"> Amigo</label>
                </div>
                
            </div> 

            <input class="btn" type="submit" name="enviar" value="Votar">
            
            <?php 
            include("registrar.php");
            ?>
          </form>
    </div>
    <script src="script.js"></script>
</body>
</html>