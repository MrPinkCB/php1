<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1</title>
</head>
<body>
    <p>These aren't the numbers you've been looking for....</p>
    <Form action="" method="POST">
    Robot Model Number: <input type="float" name="age"/>     
    <input type="submit" name="submit" value="Submit"/>
    </Form>
    <br>

    <?php    
    if (isset($_POST['age']))    
    {    
       $number1 = $_POST['age'];   // Instructions if $_POST['value'] exist
        Ceil: echo(ceil($number1) . "<br>");
        Round: echo(round($number1) . "<br>");
        Floor: echo(floor($number1) . "<br>");      
    } else{
        
}  
    ?>
               
</body>
</html>


