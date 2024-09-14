<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
</head>
<body>
    <h1>Converter Fahrenheit para Celsius</h1>

   
    <form method="POST" action="">
        <label for="fahrenheit">Temperatura em Fahrenheit:</label>
        <input type="number" name="fahrenheit" id="fahrenheit"  required value="<?php echo ($_temp['fahrenheit']) ? $_temp['fahrenheit'] : ''; ?>">
        <br><br>
        <input type="submit" value="Converter">
    </form>

    
    <?php
    if (isset($_temp['fahrenheit']) && is_numeric($_temp['fahrenheit'])) {
        $fahrenheit = $_temp['fahrenheit'];

      
        function fahrenheitParaCelsius($fahrenheit) {
            return ($fahrenheit - 32) * 5 / 9;
        }

        
        $celsius = fahrenheitParaCelsius($fahrenheit);
        echo "<h2>A temperatura em Celsius é: " . number_format($celsius, 2) . " °C</h2>";
    } elseif (isset($_temp['fahrenheit'])) {
        echo "<h2>Por favor, insira um valor numérico válido.</h2>";
    }
    ?>
    
</body>
</html>
