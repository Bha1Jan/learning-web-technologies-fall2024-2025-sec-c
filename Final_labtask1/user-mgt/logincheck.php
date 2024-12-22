<?php
session_start();

// Check if form is submitted
if(isset($_REQUEST['submit'])){
    // Get username and password from POST request
    $username = trim($_POST['username']);
    $password = trim($_REQUEST['password']);

    // Check if username or password is empty
    if(empty($username) || empty($password)){
        echo "Null username/password!";
    } else {
        // Check if the 'user' session variable is set
        if(isset($_SESSION['user']) && $_SESSION['user']['username'] == $username && password_verify($password, $_SESSION['user']['password'])) {
            // Set cookie for session status
            setcookie('status', 'true', time()+3000, '/');
            // Redirect to home.php
            header('location: home.php');
            exit;
        } else {
            echo "Invalid user!";
        }
    }
} else {
    // If the form wasn't submitted, redirect to the login page
    header('location: login.html');
    exit;
}
?>
