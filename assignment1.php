<?php
function veronLaskenta($hinta) {
    $procentti = 0.24;
    $vero = $procentti * $hinta;
    echo "Arvonlisävero hinnasta " . $hinta . " € on ". $vero . " €.";  
}
veronLaskenta(10);
veronLaskenta(35.5);
veronLaskenta(1.80);
?>