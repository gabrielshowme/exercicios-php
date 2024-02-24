<?php
//somando  a + b

echo "<p style='color: red;'>SOMA</p>";

$a = 10;
$b = 10;
$c = 50;
$d = 2;



$resultado1 = $a + $b;
echo $resultado1 . "<br><br><br>";

$resultado2 = $c + $d;
echo $resultado2 . "<br><br><br>";  






//CONDIÇÃO(IF/ELSE)1
echo "<p style='color: red;'>CONDIÇÂO1</p>"."<br>";

$idade = 18;
if($idade >=18){
    echo "Você é maior de idade.\n"."<br><br><br> ";
    }else {
        echo "Você é menor de idade.\n" . "<br><br><br>";
            }



//CONDIÇÃO(IF/ELSE)2
 echo "<p style='color: red;'>CONDIÇÂO2</p>"."<br>";
 
 $a = "JOAO";
if($a = "gabriel"){
    echo "correto";
    }else{
        echo "errado"."<br><br><br>";
    }




//FUNÇÃO SEM VARIAVEL
echo "<p style='color:red;'>FUNÇÃO ADIÇÃO</p>"."<br>";
function somar($a,$b){
    return $a + $b;
}
echo somar(1000, 180)."<br>";
echo somar(25, 25)."<br>";




//FUNÇÃO DIVISÃO

echo "<p style='color:red;'>FUNÇÃO DIVISÃO</p>"."<br>";

$a = 100;
$b = 4;

function divisão($a, $b)
{
    $resultado = $a / $b;
    return $resultado;
}
echo divisão($a, $b);
    
//FUNÇÃO MULTIPLICAÇÃO

echo "<p style='color:red';>FUNÇÃO MULTIPLICAÇÃO</p>"."<br>";

$a = 7;
$b = 4;

function multiplicação($a, $b){
    $resultado = $a * $b;
    return $resultado;
}
echo multiplicação($a, $b)."<br>";
echo somar($a,$b);

//FUNÇÃO SUBTRAÇÃO
echo "<p style='color:red';>FUNÇÃO SUBTRAÇÃO</p>"."<br>";

$a = 1000;
$b = 550;

function subtração($a, $b){
    $resultado = $a - $b;
    return $resultado;
}
echo subtração($a,$b)."<br>";



//ARRAYS POR INDICES

echo "<p style='color:red';>ARRAYS POR ÍNDICE</p>"."<br>";

$frutas = array("Maçã", "Banana", "Morango");//indice
echo $frutas[1]."<br>"; // Saída: Banana



//ARRAYS NUMÉRICOS



echo "<p style='color:red';>ARRAYS NÚMERICO</p>"."<br>";

$aluno = array("nome" => "João", "idade" => 20, "nota" =>8.5);
echo "O aluno " .  $aluno["nome"] . " tem " . $aluno["idade"] . " anos. " ." Nota dele é " . $aluno["nota"];
?>


