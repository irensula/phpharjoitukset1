<?php

$nimi = array("Timo", "Jussi", "Kaarina", "Kirsi", "Juha" );
$sukunimi = array("Korhonen", "Jaskara", "Bruun", "Lindström", "Oulainen" );
$nimi_ja_sukunimi = array_combine($nimi, $sukunimi);

print_r($nimi_ja_sukunimi);
foreach($nimi_ja_sukunimi as $nimi => $sukunimi) {
    echo "$nimi, $sukunimi\n";
  }

?>