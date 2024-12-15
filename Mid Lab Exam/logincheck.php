<?php
    session_start();

    if(isset($_POST['submit'])){
       
        $userId = trim($_POST['userid']);
        $password = trim($_POST['password']);
       
        if($userId == null || empty($password)){
            echo "Null userId/password";
        }else if($userId == $password){
            //echo "valid user!";

            $_SESSION['xyz'] = true;
            header('location: home.php');
        }else{
            echo "Invalid user!";
        }
    }else{
        header('location: login.html');
    }
?>