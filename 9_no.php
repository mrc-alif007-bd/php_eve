<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td,th{
            border: 1px solid #000;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    

    <table>
        <tr>
            <th>Name</th>
            <th>Score</th>
        </tr>
        <?php
        $std=["tareq"=>100,"areq"=>10,"treq"=>80,"tare"=>70,"tarq"=>50,"taeq"=>90];
        $max= max($std);
        foreach($std as $key => $value){

        ?>
        <tr>
            <td><?php  echo $key ; ?></td>
            <td><?php  echo $value ; ?></td>
        </tr>
        <?php 
} 
echo "<h3>Student name with result</h3>";
    
    ?>
    </table>
    <?php   
     
        foreach($std as $key => $value){
            if($max==$value){
                 echo "Name : $key , Result : $value <br>";
            }
               
        }?>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, tr, td{
            border:1px solid;
            border-collapse:collapse;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Result</th>
        </tr>
        <?php 
                $std = ["Aarif" => 30,
                "Rafi" => 50,
                "Naziur" => 70,
                "Alif" =>68,
                "Engineer" => 20];
                $highest = 0;
                foreach($std as $key => $value){
            ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>
        <?php 
        if($value > $highest){
            $highest = $value;
        }
        } 
        echo "<h2>Highest Score</h2> <br>";
        foreach($std as $key => $value){
                if($highest == $value){
                    echo "Name : " . $key . " Score : " . $value . "<br><br>";
                }
            }?>
    </table>
</body>
</html> -->