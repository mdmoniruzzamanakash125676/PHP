<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection and Data Show</title>
</head>
<body>
    <?php

    $host="localhost";
    $dbUser="monir";
    $dbPwd="monir125676";
    $dbName="monir";

    $connect= mysqli_connect("$host","$dbUser","$dbPwd","$dbName");
    
    if($connect==false){
        echo "<h1>Error establishing database connection! </h1>";
    }

    $insertQuery = "INSERT INTO `my_users` (`id`, `fname`, `lname`, `email_addr`, `usr_pwd`, `signupDate`) VALUES (NULL, 'bijoy', 'hossen', 'bijoy@gmail.com', '12345', current_timestamp());";

    $insert = mysqli_query($connect,$insertQuery);

    if($insert==true){
        echo "Insert Data ";
        echo "<br>";
    }else{
        echo "Data could not be Inserted";
    }

   // UPDATE `my_users` SET `fname` = 'rakib' WHERE `my_users`.`id` = 8;
    $update_Query = "UPDATE my_users SET fname = 'Monir hossen' WHERE id = 5;";
    $updateData = mysqli_query($connect,$update_Query);
   

    if($updateData==true){
        echo "Data updated";
        echo "<br>";
    }else{
        echo "Data could not be updated";
    }

    $myquery = " SELECT fname, lname FROM my_users;";
    $run_Query= mysqli_query($connect,$myquery);

    if($run_Query==true){
        $dataCount = mysqli_num_rows($run_Query); 
        if($dataCount>0){
            while ($mydata =mysqli_fetch_array($run_Query)){
                echo $mydata["fname"]."  ".$mydata["lname"];
                echo "<br>";
               }
        }else{
            echo "No data Available"; 
        }

    }else{
        echo mysqli_error($connect);
    }
         
    ?>
    
</body>
</html>