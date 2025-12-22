<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
  
    $sql2 = "insert into users values(null, 'AIUB', '12345', 'AIUB@gamil.com')";
    if(mysqli_query($con, $sql2)){
        echo "success!";
    }else{
        echo "DB error!";
    }

    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    while( $row = mysqli_fetch_assoc($result)){
        print_r($row);
        echo "<br>";
    }
?>