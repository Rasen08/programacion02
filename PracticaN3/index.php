<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web PrácticaN3</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header>
        <?php
            include 'header-nav.php';
        ?>
    </header>
    <main>
        <section class="imagenes">
            <?php
                $imagenes = [
                    "./img/imagen01.jpg",
                    "./img/imagen02.jpg",
                    "./img/imagen03.jpg"
                ];

                foreach ($imagenes as $ruta) {
                    echo "<img src='$ruta' alt='Imagen'>";
                }
            ?>
        </section>
    </main>
    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
</body>
</html>