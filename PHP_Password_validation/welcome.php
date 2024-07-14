<?php 

    $dbUser ="moniruzzaman";
    $dbPassword= "12345";

    $userName=$_REQUEST["username"];
    $userPassword=$_REQUEST["password"];


    /* echo "<h1>Result :</h1>";

    if( $dbPassword== $userPassword){
        echo "Your are log in";
    }else{
        echo "Invalid Password try again";
    } */

    if( $dbPassword== $userPassword){
       // header("location: http://google.com");
        //header("location: profile.php");
        header("location: profile.php?text=$userName");
    }

?>