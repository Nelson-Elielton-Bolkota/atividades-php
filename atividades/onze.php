<?php
// Atividade 11
?>

<form method="post" action="onze.php">
    <label>Peso (kg):</label>
    <input type="number" name="peso" step="0.01" required>
    <br>
    <label>Altura (m):</label>
    <input type="number" name="altura" step="0.01" required>
    <br>
    <button type="submit">Calcular IMC</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura * $altura);

    echo "Seu IMC é: " . number_format($imc, 2);
}
?>
