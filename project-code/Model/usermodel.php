<?php
require_once('db_connection.php');

function login($username, $password){
    $con = dbConnect();
    $sql = "SELECT * FROM users WHERE username = '$username' OR email ='$username'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: ../view/dashboard.php");
            exit();
        }
        else{
            echo "<script>alert('Wrong Password!!');</script>";
        }
    }else if (empty($username) || empty($password) || empty($email)) {
        echo "Null username, password, or email";
    }else{
        echo "<script>alert('User not registered!');</script>";
    }
}

function getUserByUsername($username) {
    $con = dbConnect();
    $username = mysqli_real_escape_string($con, $username);
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($con, $sql);
    
    if ($result && mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    } else {
        return false; // User not found
    }
}
?>
