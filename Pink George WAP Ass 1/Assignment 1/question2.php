<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
</head>
<body>
    <p>Are we there yet?</p>
    <Form action="" method="POST">
    Todays date: <input type="date" name="age"/> 
    <input type="submit" name="submit" value="Submit"/>
    </Form>
    <br>  
    
    <?php 
    if (isset($_POST['date']))
    {
    $date= $_POST["date"];
    $d1=strtotime("June 30,2016");
    $d2=ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." day until June 30th 2016";
    } else {
        
    }  
    ?>

</body>
</html>