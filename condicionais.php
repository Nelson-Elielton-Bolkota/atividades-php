<?php
$numero = 10;
echo"o numero é: ",$numero;

if($numero > 10){
    echo "valor maior que 10";
}else{
    echo"menor que 10";
}

for($i = 0; $i < 10; $i++){
    echo "numero: ",$i,"\n";
}

function calcular($a, $b){
    $soma = $a + $b;
    return $soma;
}
echo calcular(10,40);

//array

$alunos = [
    [
        "nome" => "gabriel",
        "idade"=> "19",
        "sexualidade" => "emduvida"
    ],
    [
        "nome"=> "eduardo",
        "idade"=>"18",
        "sexualidade"=> "baitola"
    ]
];

foreach ($alunos as $aluno){
    echo "==========================";
    echo "\nNome: ", $aluno['nome'];
    echo "\nIDade", $aluno['idade'];
    echo "\nsexualidade",$aluno['sexualidade'];
}