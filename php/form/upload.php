<?php

    if(isset($_POST['submit'])){
    //echo "Test!";
    //print_r($_GET);
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
    }else{
        echo "invalid request! please login first!";
    }
?>