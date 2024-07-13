<!-- Welcome <?php 
echo $_POST["name"]; ?>
<br>
Your email address is: 
<?php 
echo $_POST["email"]; 
?> -->

<!--  Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>  -->


Welcome <?php 
echo $_POST["name"]; ?>
<br>
Your email address is: 
<?php 
echo $_POST["email"]; 
?>
<br>

<pre>
<!-- Your file is : -->
<?php
 $submited_Name = $_FILES["profilepicture"];
/*  echo  $submited_Name;
 echo var_dump($submited_Name);

 echo $submited_Name["name"];
 echo "<br>";
 echo $submited_Name["type"];
 echo "<br>";
 echo $submited_Name["size"]; */

 $fileName = $submited_Name["name"];

 $fileType = $submited_Name["type"];
 
 $fileSize = $submited_Name["size"];

 $fileTmpName = $submited_Name["tmp_name"];

 echo "File name is:". $fileName;
 echo "<br>"; 
 echo "File Type is:". $fileType;
 echo "<br>"; 
 echo "File Size is:". ($fileSize/1024)."KB";
 echo "<br>"; 
 echo "FileTmp name is:". $fileTmpName ;

 move_uploaded_file($fileTmpName, "images/$fileName");

 echo "<br>"; 
 echo " <img src='images/$fileName' >"




?>
</pre>
