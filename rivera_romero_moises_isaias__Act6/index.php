<?

//SITIOS DE REFERENCIA
//https://www.php.net/manual/es/tutorial.forms.php
//https://www.php.net/manual/es/reserved.variables.post.php
//https://www.w3schools.com/php/php_superglobals_post.asp
//http://w3schools.sinsixx.com/php/php_post.asp.htm
//https://www.w3schools.com/php/php_mysql_insert.asp
//http://w3schools.sinsixx.com/php/php_mysql_insert.asp.htm

$servername = "127.0.0.1";
$username = "admin_prueba";
$password = "12345";
$dbname = "base_prueba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `usuariotab` (`id`, `nombre`, `apellido_p`, `passwordd`, `direccion`, `edad`, `ciudad`) 
VALUES (NULL, '$_POST[nombre]', '', '', '$_POST[direccion]', '$_POST[edad]', '$_POST[ciudad]')";


if ($conn->query($sql) === TRUE) {
    echo "Registro guardado";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Actividad 6 Moisés Rivera</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<body>
<div class="container">
    <h1>Actividad de aprendizaje 6.</h1>
    <h2>Interacción con la página Web.</h2>
    <p>Formulario para insertar registros.</p>
    <form name="formulario" method="post" action="index.php">
        <div class="form-row">
            <div class="form-group col-md-3">
                <label>Nombre:</label>
                <input type="text" name="nombre" minlength="4" maxlength="15" required class="form-control" placeholder="Ingresar nombre" >
            </div>
        </div>
        <div class="form-group col-md-9">
            <label >Dirección:</label>
            <input type="text" name="direccion" minlength="5" maxlength="50" required class="form-control" placeholder="Ingresar dirección">
        </div>
        <div class="form-group col-md-1">
            <label >Edad:</label>
            <input type="number" name="edad" min="1" max="99" required class="form-control" placeholder="Ingresar Edad">
        </div>
        <div class="form-group col-md-11">
            <label >Ciudad:</label>
            <input type="text" name="ciudad" minlength="4" maxlength="20" required class="form-control" placeholder="Ingresar Ciudad">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Ingresar</button>
    </form>
</div>
</body>
</html>