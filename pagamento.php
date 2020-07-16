<?php
//Relação entre as variáveis e os valores do formulário index.php
$nome=filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$qtdhoras = filter_input(INPUT_POST, 'qtdhoras', FILTER_SANITIZE_NUMBER_FLOAT);
$valorhora=filter_input(INPUT_POST, 'valorhora',FILTER_SANITIZE_NUMBER_FLOAT);

// Dados do cadastro impressos na tela
echo "<br>";
echo "Nome: $nome <br>";
echo "Quantidade de horas trabalhadas: $qtdhoras <br>";
echo "Valor da hora: R$ $valorhora <br>";

// Cálculo do salário bruto
$salariob = $qtdhoras * $valorhora;
echo "Salario bruto: R$ $salariob <br>";

// Cálculo do FGTS
$fgts = (8/100)*$salariob;
echo "FGTS: R$ $fgts <br>";

// Cálculo do IR
if ($salariob > 2743.25){
    $ir = (27.5/100)*$salariob;
    echo "IR: R$ $ir <br>";
}else if ($salariob >= 1372.82 && $salariob <= 2743.25){
    $ir = (15/100)*$salariob;
    echo "IR: R$ $ir <br>";
}else if ($salariob <= 1372.81){
    $ir = 0;
    echo "IR: R$ $ir <br>";
}


// Cálculo do INSS
if ($salariob > 2894.28){
    $inss = 318.37;
    echo "INSS: R$ $inss <br>";
}else if ($salariob >= 1447.15 && $salariob <= 2894.28){
    $inss = (11/100)*$salariob;
    echo "INSS: R$ $inss <br>";
}else if ($salariob >= 868.30 && $salariob <= 1447.14){
    $inss = (9/100)*$salariob;
    echo "INSS: R$ $inss <br>";
}else if ($salariob <= 868.29){
    $inss = (8/100)*$salariob;
    echo "INSS: R$ $inss <br>";
}

// Cálculo do Salário Líquido
$salariol = $salariob - $ir - $inss;
echo "Salario liquido: R$ $salariol <br>";

// Link de Voltar
echo "<br>";
echo "<a href='" . $_SERVER['HTTP_REFERER'] . "'>Voltar</a>";

?>