<?php

    if(isset($_POST['submit'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

        if($username == "" || $password == ""){
            echo "null username/password";
        }else{

            if($username == $password){
                echo "valid user!";
            }else{
                echo "invalid user!";
            }
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Submission</title>
</head>
<body>
        <form method="post" enctype="">
            Username: <input type="text" name="username" value="<?php if(isset($username)){echo $username;}?>"/> <br>
            Password: <input type="password" name="password" value="<?php if(isset($password)){echo $password;}?>"/> <br>
                    <input type="submit" name="submit" value="Submit"/>
        </form>
</body>
</html>