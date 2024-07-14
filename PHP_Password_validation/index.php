<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From_validation</title>
</head>
<body>
    <!-- <form action="welcome.php" method="post">
        Name: <input type="text" name="username">
        Password: <input type="password" name="password">
        <input type="submit" >
    </form> -->
    <form action="welcome.php" method="post">
        FName: <input type="text" name="fname">
        LName: <input type="text" name="lname">
        Password: <input type="password" name="password">
        <input type="submit" >
    </form> 

    <font color="red">
        <?php 
        if(isset($_REQUEST["pwd_error"]) ) {
            echo $_REQUEST["pwd_error"];
        }
        elseif(isset($_REQUEST["fname_error"]) ) {
            echo $_REQUEST["fname_error"];}
        
        ?>

    
</body>
</html>