<?php

    if(isset($_REQUEST['submit']) == true){
    //print_r($_GET);
    //var_dump($_GET);
    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];


    if($username == "" || $password == ""){
        echo "null username/password... please type again!";
    }else{
        if($username == $password){
            //$_SESSION['status'] = true;
            setcookie('status', 'true', time()+3000, '/');
            $_SESSION['username'] = $username;
            header('location: home.php');
            //echo "login success!";
        }else{
            echo "Invalid username/password...";
        }
    }
    }else{
        header('location: login.html');
    }

?>