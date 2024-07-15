<?php


$host="localhost";
$dbUser="monir";
$dbPwd="monir125676";
$dbName="monir";

$connect= mysqli_connect("$host","$dbUser","$dbPwd","$dbName");

if($connect==false){
    echo "<h1>Error establishing database connection! </h1>";
}

?>