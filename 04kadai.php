v<?php
//課題1
function sum($a) {
  return $a * 2;
}
echo sum(2);

//課題2
function sum2($a, $b) {
  return $a + $b;
}
echo sum2(2, 3);

//課題3
function sum3($arr){
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo sum3(array(1, 3, 5 ,7, 9));

//課題4
function max_array($arr){
    $max_number = $arr[0];
    foreach($arr as $a){
        if($max_number < $a){
            $max_number = $a;
        }
    }
return $max_number;
}
echo max_array(4, 6, 8, 10);

?>
