<?php
    session_start();
    require_once('../model/userModel.php');

    if(isset($_POST['submit'])){
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == ""){
        echo "null username/password";
    }else{
        $user = ['username'=>$username, 'password'=> $password];
        $status = login($user);
        if($status){
            $_SESSION['username'] =$username;
            $_SESSION['status']= true;
            setcookie('status', true, time()+10, '/');
            header('location: ../view/home.php');
        }else{
            echo "invalid user!";
        }
    }
    }else{
        header('location: ../view/login.php');
    }
?>