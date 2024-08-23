<?php
$dbuser="Moniruzzaman";
$dbpwd ="1234";

$usernamefromajax=$_REQUEST["uName"];
$passwordfromajax=$_REQUEST["uPwd"];

if ($dbuser==$usernamefromajax && $dbpwd==$passwordfromajax){
    echo "logged in";
}else{
    echo "User name or Password is wrong";
}
?>