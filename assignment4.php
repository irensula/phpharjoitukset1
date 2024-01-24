<?php
function satunnaislukuMerkki(){
        
    for ($i = 0; $i < 8; $i++) {
        $luku = (rand(1, 10));
        $merkki = '&';
        $final_str = str_repeat($merkki,$luku);
        echo($final_str . "\n");
    }
}
satunnaislukuMerkki();
?>