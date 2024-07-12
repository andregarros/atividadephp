<?php
//questão 1
    $nome = "andregarros";
    echo $nome;
echo "<br>";
echo "<br>";

//questao 2
$idade = 20;
$endereço = "São Paulo";
$curso = "design";
echo "ola eu sou $nome, tenho $idade 20 anos. moro em $endereço e faço o curso de $curso no SENAC ";
echo "<br>";
echo "<br>";

//questao 3
$v1 = 20;
$v2 = 2;
$soma1 = $v1 + $v2;
$soma2 = $v1 - $v2;
$soma3 = $v1 * $v2;
$soma4 = $v1 / $v2;
echo "a soma de $v1 + $v2 = $soma1";
echo "<br>";
echo "a subtração de $v1 - $v2 = $soma2";
echo "<br>";
echo "a multiplicação de $v1 x $v2 = $soma3";
echo "<br>";
echo "a divisão de $v1 / $v2 = $soma4";
echo "<br>";
echo "<br>";
//questão 4
$n1 = 20;
$n2 = 40;

if($n1 == $n2){
     echo "$n1 é igual a $n2";
}else if($n1 < $n2 ){
    echo "$n1 é menor que o $n2";
}else{
    echo "$n1 é maio que $n2";
}
echo "<br>";
echo "<br>";
//questao 5
$p = "andre";
if (str_contains("andre", 'o')) {
    echo "true";
}else{
    echo "false";
}
echo "<br>";
echo "<br>";

//questao 6
$c = "andre";
function retorna($c){
    return($c);
}
echo retorna($c);

//questao 7
$string = 'Hellow';
if (ctype_upper($string)) {
    echo "A string contém apenas letras maiúsculas.";
} else {
    echo "A string não contém apenas letras maiúsculas.";
}
echo "<br>";
echo "<br>";
//questao 8
$idadeM = 18;
$idademaior = ($idadeM < 18) ?  "menor de idade" : "maior de idade";
echo $idademaior;

//questao 9
$alunos = array(
    'Junior' => 7.5,
    'Maria' => 10,
    'Paulo' => 6,
    'Ana' => 8.6,
    'Pedro' => 5.5,
    'Julia' => 6.5
);
echo "<br>";
echo "<br>";
foreach($alunos as $aluno => $nota):
    if($nota >= 7){
        echo "Aprovado: $aluno - Nota: $nota <br>";
    } else {
        echo "Reprovado: $aluno - Nota: $nota <br>";
    }
endforeach;


