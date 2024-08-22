<?php 
 //include("connect.php");

require_once("connect.php");


echo "data connected";

echo "<br>";


if ( isset($_REQUEST["fname"])&& isset($_REQUEST["lname"])&& isset($_REQUEST["email_addr"])&& isset($_REQUEST["usr_pwd"])){
    $fname =$_REQUEST["fname"];
    $lname =$_REQUEST["lname"];
    $email_adr =$_REQUEST["email_addr"];
    $password =$_REQUEST["usr_pwd"];


    $avatar_name =$_FILES["avatar"]["name"];
    $avatar_tmp=$_FILES["avatar"]["tmp_name"];
    $location="avatar/";

    $nameForDB=uniqid();

    move_uploaded_file($avatar_tmp,  $location."$nameForDB.jpg");

   
   $insertQuery = "INSERT INTO `my_users` (`fname`, `lname`, `email_addr`, `usr_pwd`,`avatar`) VALUES ('$fname', '$lname', '$email_adr', '$password','$nameForDB.jpg' )";

   $runQuery= mysqli_query($connect,$insertQuery);


   if($runQuery==true){
    header("location: index.php?action=true");
   }else{
    header("location: index.php?action=false");
   }


    

}

 

 




?>