<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirmPassword'];
    $name = $_POST['name'];
    $usertype = $_POST['userType'];

    if ($password != $confirm_password) {
        die("Passwords do not match! <a href='registration.php'>Go Back</a>");
        $_SESSION['xyz'] = false;
    }

    $user_data = "$id|$password|$name|$usertype\n";
    file_put_contents("users.txt", $user_data, FILE_APPEND);
    
    echo "Registration Successful! <a href='login.html'>Login Now</a>";
}
?>