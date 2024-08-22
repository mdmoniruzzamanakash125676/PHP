<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJax Tutorial</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

    <form onsubmit="return false;" action="" method="POST">
        <input  value="Moniruzzaman" type="text" name="username" id="usrnm">
        <input type="text" name="password" id="pwd">
        <input type="submit" value="login" name="submitButton" id="submitButtonID">
    </form>

    <script type="text/javascript">


        $(document).ready(function(){

            $("#submitButtonID").on("click",function(){

                var userName = $("#usrnm").val();
                var userPwd = $("#pwd").val();

            $.post("login_verification_ajax_core.php",{uName:userName, uPwd:userPwd}, function(mydata) {
            
                alert(mydata);
            
        
            });
            


         });
         


          

           

        });


    </script>
</body>
</html>