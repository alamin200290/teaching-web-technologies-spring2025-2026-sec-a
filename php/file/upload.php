<?php

    //print_r($_FILES);
    //validation


    $src = $_FILES['myfile']['tmp_name'];
    $ext = explode('.', $_FILES['myfile']['name']);
    $index = count($ext);
    $newName = time().".".$ext[$index-1];
    $des = 'upload/'.$newName; 

    if(move_uploaded_file($src, $des)){
        echo "Success!";
    }else{
        echo "Error";
    }
?>