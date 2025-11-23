<?php
$result = "B";

if($result == "A"){
    echo "Excellent";
    exit();
}
elseif($result == "B"){
    echo "Good";
    exit();
}
elseif($result == "C"){
    echo "Fair";
    exit();
}
elseif($result == "D"){
    echo "Poor";
    exit();
}
elseif($result == "F"){
    echo "Failur";
    exit();
}
else{
    echo "Data not found";
}

?>
