<?php
$array=[50,5,46,28,54];
$max = $array[0];

foreach($array as $arr){
    if($arr>$max){
        $max=$arr;
    }
}
echo "largest number is $max";

?>

