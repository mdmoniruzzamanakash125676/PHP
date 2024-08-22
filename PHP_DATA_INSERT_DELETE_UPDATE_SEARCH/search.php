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

        <?php 

            if(isset($_REQUEST["deleted"])){
                echo "Data has been deleted";
            }elseif(isset($_REQUEST["edited"])){
                echo "Data edited";
            }

        
        ?>




    <form  action="" method="POST">

       <input type="text" placeholder=" Type user name" name="searchTerm">
        <input type="submit" name="searchBTN" value="Search" style="border:1px solid #ddd;background:tomato;border-radius:10px;color:white;padding: 10px;">
        

    </form>
    <br><br>

            <?php 
             if(isset($_REQUEST["searchTerm"])){

                $searchTerm = $_REQUEST["searchTerm"];
                
                ?>
                 <table border="1px">
        <tr>
            <td><b>Serial No</b></td>
            <td><b>DB Id</b></td>
            <td><b>First Name</b></td>
            <td><b>Last Name</b></td>
            <td><b>Email</b></td>
            <td><b>User Password</b></td>
            <td><b>Profile Picture</b></td>
            <td><b>Action</b></td>
        </tr>

<?php 
    require_once("connect.php");

    $showDataQuery= "select * from my_users where lname like '%$searchTerm%' ";

    $runDataQuery=mysqli_query($connect,$showDataQuery);

    if($runDataQuery==true){

        $snCount=1;
        while($myData =mysqli_fetch_array($runDataQuery)){ ?>
            
        <tr>
            <td><?php echo $snCount;$snCount++ ?></td>
            <td><?php echo $myData["id"]; ?></td>
            <td><?php echo $myData["fname"]; ?></td>
            <td><?php echo  $myData["lname"]; ?></td>
            <td><?php echo  $myData["email_addr"]; ?></td>
            <td><?php echo  $myData["usr_pwd"];?></td>
            <td><center><img width="60px" src="avatar/<?php echo  $myData["avatar"];?>" alt=""></center></td>
            <td><a href="editdata.php?edit_id=<?php echo $myData["id"];?>">Edit</a> |  <a onclick="return confirm('Are you sure for Delete');" href="deletedata_core.php?id=<?php echo $myData["id"];?>">Delete</a></td>
        </tr>




            <?php

        }
    }   



?>
        
    </table>   
                
                <?php 
                
               
            } 
            ?>
        

   
    
</body>
</html>