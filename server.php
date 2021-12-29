<?php
session_start();

$username = "";
$email = "";
$errors = array();
// connecting to dattvase
$servername = "localhost";
$usernamedb = "root";
$passworddb = "";
$dbname1 = "registration";

$db = mysqli_connect($servername,$usernamedb,$passworddb,$dbname1);


//if the register burtton is clicked
if (isset($_POST['Register'])) {
    $username = mysqli_real_escape_string($db,$_POST["username"]);
    $email = mysqli_real_escape_string($db,$_POST["email"]);
    $password = mysqli_real_escape_string($db,$_POST["password"]);
    $cpassword = mysqli_real_escape_string($db,$_POST["cpassword"]);

    //form validation
    if (empty($username)) {
        array_push($errors,"Username is required");
    }
    if (empty($email)) {
        array_push($errors,"Email is required");
    }
    if (empty($password)) {
        array_push($errors,"Password is required");
    }
    
    if ($password != $cpassword) {
        array_push($errors,"Passwords don't match");
    }

    if(count($errors) == 0) {
        $password1 = md5($password);
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password1')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Login successful";
        header('location: index.php'); //homepage

    }


}

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db,$_POST["username"]);
    
    $password = mysqli_real_escape_string($db,$_POST["password"]);
    

    //form validation
    if (empty($username)) {
        array_push($errors,"Username is required");
    }
    if (empty($password)) {
        array_push($errors,"Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($db,$query);
        if (mysqli_num_rows($result) == 1) {
            //login
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Login successful";
            header('location: index.php'); //homepage
    
        }
        else {
            array_push($errors,"Invalid credentials, please try again");
            
        }
    }
}

//logoyt
    if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: index.php');

}

?>