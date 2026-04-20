<?php
    session_start();
    if(isset($_POST['submit'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username/password";
    }else{

        if($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
            $_SESSION['username'] =$username;
            $_SESSION['status']= true;
            header('location: home.php');
        }else{
            echo "invalid user!";
        }
    }
    }else{
        header('location: login.php');
    }
?>