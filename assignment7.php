<?php
function koearvosanoja() {
    
    $number_of_array = (rand(10, 20));
    
    for($i = 0 ; $i < $number_of_array; $i++){
        $array[$i] = mt_rand(4*10, 10*10) / 10;
       }
       print_r($array);

    $average = round(array_sum($array)/count($array), 2);

    echo "Keskiarvo on $average.\n";
    
    if ($average >= 9) {
        echo "Excellent!";
    } elseif ($average < 9 and $average >= 8){
        echo "Good work!";
    } elseif ($average < 8 and $average >= 6){
        echo "There is room for improvement.";
    } elseif ($average < 6 and $average >= 4.25){
        echo "You pass but barely.";
    } elseif ($average < 4.25){
        echo "You have failed.";
    
    }
}
  koearvosanoja();
?>


