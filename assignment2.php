<?php
function vertailu($a, $b, $c){
    if ($a == $b and $b == $c and $a == $c) {
        echo "a=".$a.", b=".$b.", c=".$c." kaikki luvut ovat yhtäsuuria\n";
    } elseif ($a == $b or $b == $c or $a == $c) {
        echo "a=".$a.", b=".$b.", c=".$c." kaksi lukua on yhtäsuuria\n";
    } elseif ($a < $b and $b < $c) {
        echo "a=".$a.", b=".$b.", c=".$c." luvut ovat nousevassa suuruusjärjestyksessä\n";
    } elseif ($a > $b and $b > $c) {
        echo "a=".$a.", b=".$b.", c=".$c." luvut ovat laskevassa suuruusjärjesteyksessä\n";
    } else {
        echo "a=".$a.", b=".$b.", c=".$c." luvuissa ei ole mitään tolkkua\n";
    }
}
vertailu(4, 4, 4);
vertailu(-2, 1, -2);
vertailu(1, 2, 3);
vertailu(7, -3, -100);
vertailu(4, 2, 3);
vertailu(5, 'a', 3);
?>




