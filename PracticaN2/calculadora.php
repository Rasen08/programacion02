<!-- 1. Una página llamada calculadora.php que permita mostrar y realizar las operaciones básicas. -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="./css/style-calcu.css">
</head>
<body>

    <h2>Calculadora</h2>

    <form method="post" action="calculadora.php">
        <input type="number" name="num1" placeholder="Primer número" required>
        
        <select name="operacion" required>
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicacion">Multiplicar</option>
            <option value="division">Dividir</option>
        </select>

        <input type="number" name="num2" placeholder="Segundo número" required>
        
        <button type="submit">Calcular</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            $resultado = 0;

            switch ($operacion) {
                case 'suma':
                    $resultado = $num1 + $num2;
                    break;
                case 'resta':
                    $resultado = $num1 - $num2;
                    break;
                case 'multiplicacion':
                    $resultado = $num1 * $num2;
                    break;
                case 'division':
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                    } else {
                        $resultado = "Error: No se puede dividir por 0.";
                    }
                    break;
                default:
                    $resultado = "Operación no válida.";
            }

            echo "<h3>Resultado: <strong>$resultado</strong></h3>";
        }
    ?>
</body>