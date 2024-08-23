<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP Data Insert</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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




    <form enctype="multipart/form-data" action="savedata_core.php" method="POST">

        <input type="text" name="fname" placeholder="First name">
        <input type="text" name="lname" placeholder="Last name">
        <input type="email" name="email_addr" placeholder="Email">
        <input type="password" name="usr_pwd" placeholder="Password">
        <input type="file" name="avatar">
        <input type="submit" name="submitButton" value="SAVE DATA">
        

    </form>
    <br><br>


     <div id="dltmsg" style="color:red; font-size:30px;font-weigth:bold;"></div>   

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

    $showDataQuery= "select * from my_users";

    $runDataQuery=mysqli_query($connect,$showDataQuery);

    if($runDataQuery==true){

        $snCount=1;
        while($myData =mysqli_fetch_array($runDataQuery)){ ?>
           <!--  echo'<tr>
            <td>'.$myData["fname"].'</td>
            <td>'.$myData["lname"].'</td>
            <td>'.$myData["email_addr"].'</td>
            <td>'.$myData["usr_pwd"].'</td>
            <td><a href="#">Edit</a>  <a href="#">Delete</a></td>

        </tr>'; --> 



        <tr id="data<?php echo $myData["id"]; ?>" >
            <td><?php echo $snCount;$snCount++ ?></td>
            <td><?php echo $myData["id"]; ?></td>
            <td><?php echo $myData["fname"]; ?></td>
            <td><?php echo  $myData["lname"]; ?></td>
            <td><?php echo  $myData["email_addr"]; ?></td>
            <td><?php echo  $myData["usr_pwd"];?></td>
            <td><center><img width="60px" src="avatar/<?php echo  $myData["avatar"];?>" alt=""></center></td>
            <td><a href="editdata.php?edit_id=<?php echo $myData["id"];?>">Edit</a> |  <a onclick="return confirm('Are you sure for Delete');" id="deleteID" data-amarvalue="<?php echo $myData["id"]; ?>" href="#">Delete</a></td>
        </tr>




            <?php

        }
    }   



?>
        
    </table>

    <script type="text/javascript">
        $(document).ready(function(){

                $("a#deleteID").on("click",function(){

                    var myahrefvalue = $(this).data("amarvalue");
                    
                    $.post("deletedata_core.php",{id :myahrefvalue},function(myvaluedata){

                        var mydataReturned= myvaluedata;

                        if(mydataReturned=="1"){
                           $("#dltmsg").html("The User has been deleted");

                        }

                        

                    });
                    $(this).parent().parent().remove();

                });
             
        });

    </script>
    
</body>
</html>