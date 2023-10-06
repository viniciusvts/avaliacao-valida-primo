<?php
function validaPrimo($value) {
    if ($value <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($value); $i++) {
        if ($value % $i === 0) {
            return false;
        }
    }
    return true;
}

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