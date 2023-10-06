<?php
function validaPrimo($value){
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
?>