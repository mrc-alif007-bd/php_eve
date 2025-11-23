<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for=""> Email Validetion</label>
    <form action="" mrthod="post">
     
    <input type="text" name="name" placeholder="Enter your name"><br>
    <input type="text" name="email" placeholder="Enter your email"><br>

    <input type="submit" name="submit" value="SUBMIT"><br>

    </form>
<?php
if(isset($_REQUEST['submit'])){
    extract($_REQUEST);

    if(strlen($name)<4 || strlen("name")>8){
        echo "Name must br in 4 to 8 charecter <br>";
    }
    else{
        echo "Name Submited  <br>";
    }
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "Email Submited  <br>";
    }
    else{
        echo "Unvalid Email  <br>";
    }
}

?>

</body>
</html>

