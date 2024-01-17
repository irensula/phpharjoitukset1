<?php
function satunnaislukuMerkki(){
    $luku = (rand(1, 10));
    $i = 1;
    while ($i < 8) {
        echo $i, $luku."</br>";
        $i++;
    }
}
satunnaislukuMerkki();
?>