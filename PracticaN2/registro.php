<!-- 3. En la página registro php debe mostrar el nombre y contraseña del usuario y la posibilidad de volver a la página anterior y poseer un contador que muestre la cantidad de registros realizados. -->


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="./css/style-form.css">
</head>
<body>
    <div class="info-registro">
        <?php
            session_start();

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $password = $_POST['password'];

                if (!isset($_SESSION['contador'])) { // Si la variable $_SESSION['contador'] no existe, la crea. Para cuando se realiza un registro por primera vez.
                    $_SESSION['contador'] = 0;
                }

                $_SESSION['contador']++;

                echo "<h2>Usuario Registrado</h2>";
                echo "<div>Nombre: ".htmlspecialchars($nombre)." ".htmlspecialchars($apellido)."<br></div>";
                echo "<div>Contraseña: ".htmlspecialchars($password)."<br></div>";
                echo "<div>Usuarios registrados: <strong>" . $_SESSION['contador'] . "</strong><br></div>";

                echo '<a href="bienvenida.html" class="boton-volver">Ir a la página anterior</a>';
            } else {
                echo "No se han enviado datos.";
            }
        ?>
    </div>
</body>
</html>

