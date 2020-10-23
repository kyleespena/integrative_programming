    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculate</title>
    </head>
    <body>
       <form action="/phpprograms/assign_one_exercise_two.php" method="get">
        <input type="text" name="num1" placeholder="Enter a value "/>
        <br>
        <input type="text" name="num2" placeholder="Enter a value "/>
        <br>   
            <input type="submit" type="submit" name="add" value="+ ">
            <input type="submit" name="sub" value="- ">
            <input type="submit" name="mul" value="* ">
            <input type="submit" name="div" value="/ ">  
          
       </form>
    </body>
    </html>
<?php
    if(isset($_GET['add'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $add = $num1 + $num2;
    
        echo "The sum of " .$num1. " and " .$num2. " is " .$add;
    }
     
    if(isset($_GET['sub'])){
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $sub = $num1 - $num2;
    
            echo "The difference of " .$num1. " and " .$num2. " is " .$sub;
    }
    if(isset($_GET['mul'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $mul = $num1 * $num2;

        echo "The product of " .$num1. " and " .$num2. " is " .$mul;
    }
    if(isset($_GET['div'])){
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $div = $num1 / $num2;

        echo "The quotient of " .$num1. " and " .$num2. " is " .$div;
    }
?>