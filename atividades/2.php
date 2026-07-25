<?php
// Atividade 2
$dinheiro = 1621;

if ($dinheiro <= 1621) {
    echo "Pobre\n";
} elseif ($dinheiro < 10000) {
    echo "Classe Media\n";
} elseif ($dinheiro < 100000) {
    echo "Riquinho\n";
} elseif ($dinheiro < 1000000) {
    echo "Ricão\n";
} else {
    echo "Elon Musk\n";
}