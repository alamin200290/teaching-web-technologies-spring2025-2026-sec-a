<?php

    $username = $_POST['username'];
    sleep(3);
    if($username == ""){
        echo "null username found, please type username first!";
    }else{
        echo "your username is: ".$username;
    }

?>