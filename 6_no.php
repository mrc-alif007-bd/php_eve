<?php
$array=["Bangladesh" => "Dhaka",
 "India" => "Delhi",
 "Pakistan" => "Islamabad",
 "Afganistan" => "Kabul",
 "Bhutan" => "Thimpu"];

 ksort($array);

 foreach($array as $key => $value){
    echo "$value is the capital of $key <br>";
 }

?>

