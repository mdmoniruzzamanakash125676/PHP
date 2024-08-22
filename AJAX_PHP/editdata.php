<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP Data Insert</title>
</head>
<body>
    <?php 
    require_once("connect.php");

    if(isset($_REQUEST["edit_id"])){
        $editID=$_REQUEST["edit_id"];
    
    $selectInfo= "select * from my_users where id=$editID";

    $runInfo=mysqli_query($connect,$selectInfo);

        while($getData =mysqli_fetch_array($runInfo)){
           
            ?>

        
            <form action="editdata_core.php" method="POST">

                <input type="text" name="fname"  placeholder="First name" value="<?php echo $getData["fname"];?>">
                <input type="text" name="lname"  placeholder="Last name" value="<?php echo $getData["lname"];?>">
                <input type="email" name="email_addr"  placeholder="Email" value="<?php echo $getData["email_addr"];?>">
                <input type="password" name="usr_pwd"  placeholder="Password" value="<?php echo $getData["usr_pwd"];?>">
                <input type="hidden" name="editinID" value="<?php echo $editID;?>">
                <input type="submit" name="submitButton" value="Update Data">

            </from>
         

    



          <?php 

        }
   



    } ?>


    
    
    
</body>
</html>