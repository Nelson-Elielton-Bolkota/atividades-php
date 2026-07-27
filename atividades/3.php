<?php
// Atividade 3
$numero1 = intval(readline("digite o 1° numero: \n"));
$numero2 = intval(readline("digite o 2° numero: \n"));
$operacao = readline("digite 1 para soma:\n
digite 2 para subtração:\n
digite 3 para multiplicação:\n
digite 4 para divisão:\n");

switch ($operacao) {
    case '1':
        $resultado = $numero1 + $numero2;
        break;

    case '2':
        $resultado = $numero1 - $numero2;
        break;

    case '3':
        $resultado = $numero1 * $numero2;
        break;

    case '4':
        $resultado = $numero1 / $numero2;
        break;
    
    default:
        echo "opção invalida";
        break;
    
}
echo "Resultado: " . $resultado . "\n";
?>
