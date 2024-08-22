<?php 

require_once("connect.php");

if(isset($_REQUEST["submitButton"])){

    $fname =$_REQUEST["fname"];
    $lname =$_REQUEST["lname"];
    $email_addr =$_REQUEST["email_addr"];
    $usr_pwd =$_REQUEST["usr_pwd"];
    $editinID =$_REQUEST["editinID"];


    $upquery="UPDATE my_users SET fname='$fname',lname='$lname',email_addr='$email_addr',usr_pwd='$usr_pwd' where id=$editinID";

    $runquery= mysqli_query($connect,$upquery);

    if($runquery == true){
        header("location: index.php?edited");
    }

}


?>