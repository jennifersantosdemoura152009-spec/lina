<?php
// Solicita ao usuário um número via terminal
echo "Digite um número: ";
$numero = trim(fgets(STDIN));

// Verifica se é um número válido
if (!is_numeric($numero)) {
    echo "Por favor, digite um valor numérico.\n";
    exit;
}

// Processamento: compara com 40
if ($numero > 40) {
    echo "$numero é maior que 40.\n";
} elseif ($numero < 40) {
    echo "$numero é menor que 40.\n";
} else {
    echo "$numero é igual a 40.\n";
}
?>