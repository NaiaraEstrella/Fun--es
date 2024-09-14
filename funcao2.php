<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Moeda </title>
</head>
<body>
    <h1>Converter Dólar para Real</h1>

    
    <form method="POST" action="">
        <label for="dolar">Valor em Dólares:</label>
        <input type="number" name="dolar" id="dolar" required value="<?php echo ($valor['dolar']) ? $valor['dolar'] : ''; ?>">
        <br><br>
        <input type="submit" value="Converter">
    </form>

    
    <?php
    if (isset($valor['dolar']) && is_numeric($valor['dolar'])) {
        $dolar = $valor['dolar'];

        
        function converterDolarParaReal($dolar) {
            $cotacao = 1.81; 
            $real = $dolar * $cotacao;
            return round($real, 2); 
        }

        
        $real = converterDolarParaReal($dolar);
        echo "<h2>O valor de $$dolar dólares em reais é: R$ $real</h2>";
    } elseif (isset($valor['dolar'])) {
        echo "<h2>Por favor, insira um valor numérico válido.</h2>";
    }
    ?>

</body>
</html>
