<?php 
require_once ("connect.php");

$getID=$_REQUEST["id"];

$dltQuery="delete from my_users where id=$getID";

$runDlquery =mysqli_query($connect,$dltQuery);

if($runDlquery == true){
    header("location: index.php?deleted");
}


?>