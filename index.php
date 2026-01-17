<?php

$inputText = $_POST["txt"] ?? "";

$message = "";

    if(strpos($inputText,"@")){
        $message = "Valid Email";
    }
    else{
        $message = "Invalid Email";
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

    <form action="" method="post">
            <input type="text" placeholder = "Enter text :" name="txt"> <br> <br>
    <input type="submit" value="Submit">
    </form>

    <?php 
        echo htmlspecialchars($message) . "</br>"; 
    
    ?>
    
</body>
</html>