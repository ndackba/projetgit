<?php
function estPair($nombre) {
    if($nombre % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

if(estPair(4)) {
    echo "2  est pair.";
} else {
    echo "2  est impair.";
}
?>