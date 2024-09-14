<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Peso Ideal</title>
</head>
<body>
    <h1>Calcular Peso Ideal</h1>
    
    <form method="POST" action="">
        <label for="altura">Altura (em metros):</label>
        <input type="number" name="altura" id="altura">
        <br><br>
        
        <label for="sexo">Sexo:</label>
        <select name="sexo" id="sexo" required>
            <option value="">Selecione</option>
            <option value="masculino" <?php echo ($sexo['sexo'] ?? '') == 'masculino' ? 'selected' : ''; ?>>Masculino</option>
            <option value="feminino" <?php echo ($sexo['sexo'] ?? '') == 'feminino' ? 'selected' : ''; ?>>Feminino</option>
        </select>
        <br><br>
        
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    
    $altura = $altura['altura'];
    $sexo = $sexo['sexo'];

    function calcularPesoIdeal($sexo, $altura) {
        if ($sexo == 'feminino') {
            return (62.1 * $altura) - 44.7;
        } elseif ($sexo == 'masculino') {
            return (72.7 * $altura) - 58;
        }
    }

    $pesoIdeal = calcularPesoIdeal($sexo, $altura);
    echo "<h2>O peso ideal para uma pessoa de sexo $sexo com altura de $altura metros é: " . number_format($pesoIdeal, 2) . " kg</h2>";
    ?>

</body>
</html>


