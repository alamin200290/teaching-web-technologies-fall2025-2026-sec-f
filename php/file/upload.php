<?php

    //print_r($_FILES);

    $src = $_FILES['myfile']['tmp_name'];
    $name = time();
    $ext = explode('.', $_FILES['myfile']['name']);
    $des = 'upload/'.$name.".".$ext[1];

    if(move_uploaded_file($src, $des)){
        echo "Done";
    }else{
        echo "Error";
    }
?>