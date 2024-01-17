<?php
function satunnaisluku(){
    $luku = (rand(1, 100));
    if ($luku >= 11 and $luku <= 49) {
        echo $luku . "  is on the small side.";
    } elseif ($luku >= 51 and $luku <= 89) {
        echo $luku . "  is on the large side.";
    } elseif ($luku < 11 or $luku > 89) {
        echo $luku." is near the extreme.";
    } elseif ($luku == 50) {
        echo $luku." is right in the middle!";
    } elseif ($luku == 42) {
        echo $luku." ! You have found the answer to life.";
    }
}
satunnaisluku();
?>




