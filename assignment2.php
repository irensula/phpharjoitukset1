<?php
function vertailu($a, $b, $c){
    if ($a == $b and $b == $c and $a == $c) {
        echo "a=".$a.", b=".$b.", c=".$c." luvut kaikki ovat yhtäsuuria";
    } elseif ($a == $b or $b == $c or $a == $c) {
        echo "a=".$a.", b=".$b.", c=".$c." luvut kaksi lukua on yhtäsuuria";
    } elseif ($a < $b and $b < $c) {
        echo "a=".$a.", b=".$b.", c=".$c." luvut ovat nousevassa suuruusjärjestyksessä";
    } elseif ($a > $b and $b > $c) {
        echo "a=".$a.", b=".$b.", c=".$c." luvut ovat laskevassa suuruusjärjesteyksessä";
    } else {
        echo "a=".$a.", b=".$b.", c=".$c." luvuissa ei ole mitään tolkkua";
    }
}
vertailu(4, 4, 4);
?>




