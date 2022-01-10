<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 3</title>
    <p>Enter Two Numbers</p>
    <Form action="" method="GET">
    Number 1: <input type="float" name="number1"/>    
    <br>
    Number 2: <input type="float" name="number2"/> 
    <input type="submit" name="submit" value="Submit"/>
    </Form>
    <br>  
</head>
<body>

<?php 
    include "function_library.php";

    if (isset($_GET['number1']))
    {
    

    if(is_numeric($_GET['number1'])&& is_numeric($_GET['number2']) ){
        $number1= $_GET["number1"];
        $number2= $_GET["number2"];
        $result = addTwoNumbers($number1, $number2);
        echo "The sum of ".$number1." + ".$number2." is: ".number_format($result, 2);  
        echo "<br>";
        $difference = subtractTwoNumbers($number1, $number2);
        echo "The difference of $number1 - $number2 is:" .number_format($difference, 2);   
        echo "<br>";
        $total = multiplyTwoNumbers($number1, $number2);
        echo "The total of $number1 X $number2 is:"  .number_format($total, 2);
        echo "<br>";
        $division = divideTwoNumbers($number1, $number2);
        echo "The division of $number1 / $number2 is:"  .number_format($division, 2);        
        echo "<br>";
    }else{
     echo"No Number Inserted";
    }  
    }   
   ?>    
</body>
</html>