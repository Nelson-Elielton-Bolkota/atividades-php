<?php
// Atividade 10

$associativo = [
    [
        "nome" => "Dionata",
        "idade" => "89",
        "cidade" => "Gorpa City",
        "tchola" => "É raro, mas sempre acontece"
    ]
];

foreach ($associativo as $assos) {
    echo "Nome: " . $assos['nome'] . "\n";
    echo "Idade: " . $assos['idade'] . "\n";
    echo "Cidade: " . $assos['cidade'] . "\n";
    echo "Tchola: " . $assos['tchola'] . "\n";
}
?>
