<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCD</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="Num1" placeholder="Input numbers" ><br>
        <input type="text" name="Num2"placeholder="Input numbers" ><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $Num1 = $_POST['Num1'];
        $Num2 = $_POST['Num2'];

        $min =($Num1 < $Num2) ? $Num1 : $Num2;
        for($i=1;$i<=$min;$i++){
            if($Num1%$i==0 && $Num2%$i==0){
            $gcd=$i;
         }
        }
    $max =($Num1 > $Num2) ? $Num1 : $Num2;
        $i=$max;
    while(1){
        if($i%$Num1==0 && $i%$Num2==0){
            $lcm = $i;
        break;
            }
        $i+=$max;
        }
        echo "GCD of $Num1 and $Num2 is $gcd";
    }
?>