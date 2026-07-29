<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = floatval($_POST["numero1"]);
    $numero2 = floatval($_POST["numero2"]);
    $operacao = $_POST["operacao"];

    if ($operacao == "somar") {
        $resultado = $numero1 + $numero2;
    } elseif ($operacao == "subtrair") {
        $resultado = $numero1 - $numero2;
    } elseif ($operacao == "multiplicar") {
        $resultado = $numero1 * $numero2;
    } elseif ($operacao == "dividir") {
        $resultado = $numero1 / $numero2;
    }
}
?>

<form method="POST">
    Número 1: <input type="number" name="numero1"><br>
    Número 2: <input type="number" name="numero2"><br>
    <button name="operacao" value="somar">Somar</button>
    <button name="operacao" value="subtrair">Subtrair</button>
    <button name="operacao" value="multiplicar">Multiplicar</button>
    <button name="operacao" value="dividir">Dividir</button>
</form>

<?php if (isset($resultado)) echo "Resultado: " . $resultado; ?>