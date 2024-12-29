<?php
require_once('database.php');

function login($email, $password) {
    $con = dbConnection();
    $query = "SELECT * FROM user_info WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        return $row;
    } else {
        return null;
    }
}

function addUser($fullname, $phone, $email, $username, $password, $role) {
    $con = dbConnection();
    $query = "INSERT INTO user_info
              VALUES('', '$fullname', '$phone', '$email', '$username', '$password', '$role')";
    $result = mysqli_query($con, $query);

    if ($result) {
        return true;
    } else {
        return false;
    }
}

function uniqueEmail($email) {
    $con = dbConnection();
    $query = "SELECT email FROM user_info WHERE email = '$email'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        return false;
    } else {
        return true;
    }
}
?>












