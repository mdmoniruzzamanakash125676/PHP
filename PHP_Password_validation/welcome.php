<?php 

    $dbUser ="moniruzzaman";
    $dbPassword= "12345";

  /*   $userName=$_REQUEST["username"];
    $userPassword=$_REQUEST["password"]; */

    $fname= htmlspecialchars($_REQUEST["fname"]) ;
    $lname= $_REQUEST["lname"];
    $password= $_REQUEST["password"];


    /* echo "<h1>Result :</h1>";

    if( $dbPassword== $userPassword){
        echo "Your are log in";
    }else{
        echo "Invalid Password try again";
    } */

   /*  if( $dbPassword== $password){
       // header("location: http://google.com");
        //header("location: profile.php");
        header("location: profile.php?text=$userName");
    } */
   $cheakPwdLen=strlen($password);
   $cheakfname=strlen($fname);

   echo "<h2>Your Input:</h2>";  
   echo "FName: " . $fname;  
   echo "<br>";  
   echo "LName: " . $lname;  
   echo "<br>";  
   echo "Password: " . $password; 

   if (($cheakPwdLen==6)==false){
    header("location: index.php?pwd_error=password is too short");
   }
   elseif (($cheakfname<5)==true){
    header("location: index.php?fname_error=first name is need is 5 character or above");
   }


?>