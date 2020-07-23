<?php
//課題1
$name = "HiroshiUnno";
if ($name === "HiroshiUnno") {
  echo "私は $name です";
} else {
  echo"あなたの名前ではありません";
}

//課題2
$total = 0;
echo $total;

for ($idea = 0; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;

//課題3
$fruits = array("apple", "mango", "banana", "lemon", "melon");

foreach($fruits as $fruit) {
  echo "要素は" . $fruit;
  echo "\n";
}

//課題4
$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++) {
  if(($i % 5) == 0){
    echo $i;
  }
}
?>
