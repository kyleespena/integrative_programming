<?php
    // 1. Variables
        $name = "kyle";
        $age = 20;
        $gender = 'male';

    //2. Echo or Print

        echo "Name: $name <br>";
        echo 'Age: '.$age. ' <br> ';
        echo "Gender: $gender<br>";

    //3. Data Types
    var_dump([1234, 'two']);
    var_dump(null);             
    var_dump(false);
    var_dump(99.99);
    //4. Constant
    define('MESSAGE', 'Practice 101');
    echo '<br>';
    echo MESSAGE;
    echo '<br>';
    
    //5. Operators
    //    +, - , * , / , % , **
        echo 5**5;
        echo '<br>';
    
    //6.  Functions.
        function showmessage($message){
            return "Your message: $message";
        }
        echo showmessage('Pogi ako');
        echo '<br>';
    //7. Arrays
    $array1 = ['Apple', 'Banana', 'Lemon'];
    $array2 = array('a' => 'Apple', 'Banana', 'Lemon');
    echo $array2['a'];
    echo '<br>';
        print_r($array2);
    
    //8, Conditions
        $kyle =1;

        if($kyle ==='1'){
            echo 'Correct';
        }
        else {
                echo 'Incorrect';
        }
        echo $kyle ==1 ? 'Correct ' : 'Incorrect';
        echo '<br>';
        
        switch($kyle){
            case 1:
                echo"Pogi";
            break;
            case 2:
                echo "Pogi pa rin";
            break; 
            default:
                echo "none";
        }
        echo '<br>';
    //9. Loops
        //while
        //$ctr=1;
        //while($ctr <=5){
          //  echo 'counter'.$ctr. '<br>';

            //$ctr++;

        //}
        // Do while
        
            //do{
          //  echo "Counter: $ctr <br>";
            //$ctr++;
            //}while($ctr <=5);
        
        // For Loop
            //    for($c=1 ; $c <=5 ; $c++){
            //        echo "Nice: $c <br>";
          //  }

        // ForEach
        $array = [ 'Pogi', 'si' , 'kyle' ,'rIndex' => 'totoo'];

        foreach($array as $index => $value){
            echo 'Value: '.$index.' : '.$value. '<br>';
        }
        //10 Forms
        
        if(isset($_POST['submit'])){
            $name= $_POST['name'];
            $age = $_POST['age'];

            echo "Name: $name <br>";
            echo "Age: $age <br>";
        }

        //11. Mysql Query
            $host = 'localhost';
            $user = 'root';
            $password = '';
            $database = 'php-basics';
            $port = 3306;

            $connection = mysqli_connect($host, $user, $password, $database, $port);

            $queryUser = "SELECT * FROM user";
            $sqlUser = mysqli_query($connection, $queryUser);

            //while($results = mysqli_fetch_array($sqlUser)){
              //  echo '[Database] Name: '.$results['name']. '<br>';
               // echo '[Database] Age: '.$results['age']. '<br>'; 
            //}
            for($r =1; $r <= mysqli_num_rows($sqlUser); $r++){
                $results = mysqli_fetch_array($sqlUser);
                echo '[Database] Name: '.$results['name']. '<br>';
                echo '[Database] Age: '.$results['age']. '<br>';
            }
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <form action="/phpprograms/index.php" method="post">
            <input type="text" name="name" placeholder="Enter a name: "/>
            <input type="text" name="age" placeholder="Enter age" />
            <input type="submit" name="submit" value="="/>
            </form>
        </body>
        </html>
        <?
?>