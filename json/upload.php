<?php

    // $user = $_POST['user'];
    // //sleep(3);
    // $data =  json_decode($user);

    // if($data->username == ""){
    //     echo "null username found, please type username first!";
    // }else{
    //     echo "your username is: ".$data->username;
    // }

    $user = ['username'=> 'alamin', 'password'=>'123', 'email'=>'123@gmail.com'];

    echo json_encode($user);

?>