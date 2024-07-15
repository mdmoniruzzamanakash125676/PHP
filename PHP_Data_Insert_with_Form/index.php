<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP Data Insert</title>
</head>
<body>

    <?php 
    if(isset($_REQUEST["action"])){
        if($_REQUEST["action"]=="true"){
            echo "<font color='green'>data inserted </font>";
        }else{
            echo "<font color='red'>data not inserted </font>";

        }
    }
    
    ?>




    <form action="savedata_core.php" method="POST">

        <input type="text" name="fname" placeholder="First name">
        <input type="text" name="lname" placeholder="Last name">
        <input type="email" name="email_addr" placeholder="Email">
        <input type="password" name="usr_pwd" placeholder="Password">
        <input type="submit" name="submitButton" value="SAVE DATA">
        

    </form>
    <br><br>


        <?php 
        if(isset($_REQUEST["deleted"])){
            echo "Data has been deleted";
        }
        ?>

    <table border="1px">
        <tr>
            <td><b>DB Id</b></td>
            <td><b>First Name</b></td>
            <td><b>Last Name</b></td>
            <td><b>Email</b></td>
            <td><b>User Password</b></td>
            <td><b>Action</b></td>
        </tr>

<?php 
    require_once("connect.php");

    $showDataQuery= "select * from my_users";

    $runDataQuery=mysqli_query($connect,$showDataQuery);

    if($runDataQuery==true){
        while($myData =mysqli_fetch_array($runDataQuery)){ ?>
           <!--  echo'<tr>
            <td>'.$myData["fname"].'</td>
            <td>'.$myData["lname"].'</td>
            <td>'.$myData["email_addr"].'</td>
            <td>'.$myData["usr_pwd"].'</td>
            <td><a href="#">Edit</a>  <a href="#">Delete</a></td>

        </tr>'; --> 

        <tr>
            <td><?php echo $myData["id"]; ?></td>
            <td><?php echo $myData["fname"]; ?></td>
            <td><?php echo  $myData["lname"]; ?></td>
            <td><?php echo  $myData["email_addr"]; ?></td>
            <td><?php echo  $myData["usr_pwd"];?></td>
            <td><a href="#">Edit</a> |  <a href="deletedata_core.php?id=<?php echo $myData["id"];?>">Delete</a></td>
        </tr>




            <?php

        }
    }   



?>
        
    </table>
    
</body>
</html>