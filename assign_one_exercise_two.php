    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
       <form action="/phpprograms/assign_one_exercise_two.php" method="get">
        <input type="text" name="num1" placeholder="Enter a value "/>
        <br>
        <input type="text" name="num2" placeholder="Enter a value "/>
        <br>   
            <input type="button" name="add" value="+ ">
            <input type="button" name="subtraction" value="- ">
            <input type="button" name="multiplication" value="* ">
            <input type="button" name="division" value="/ ">  
            <input type="submit" value="=">            
       </form>
    </body>
    </html>
<?php
     if(isset($_GET['add'])){
            if(isset($_GET['submit'])){
                $result1 + $result2 = $_GET['add'];
                echo $add;
            }
        }

?>