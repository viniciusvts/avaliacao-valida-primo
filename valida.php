<?php
include 'validaprimo.php';

if (isset($_POST['numero'])) {
    $numero = intval($_POST['numero']);
    $resultado = validaPrimo($numero);

    if ($resultado) {
        echo "$numero é primo.";
    } else {
        echo "$numero não é primo.";
    }
} else {
    echo "Número não fornecido.";
}
?>
