<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="">Prime number</label>
    <form action="" method="post">
        <input type="text" name="number" placeholder="enter your number"><br>

        <input type="submit" name="submit" value="SUBMIT">
    </form>
    <?php
    if(isset($_REQUEST['submit'])){
        extract($_REQUEST);
        if($number == 1){
            echo "1 is not prime number";
        }
        if($number == 2){
            echo "2 is prime number";
        }
        if($number>2){
            for($i=2;$i<$number;$i++){
                if($number%$i == 0){
                    echo "$number is not prime number";
                    exit();
                }

            }
            echo "$number is prime number";

        }
    }

    ?>
</body>
</html>

