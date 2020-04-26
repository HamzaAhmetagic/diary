<?php
require_once("User.php");
require_once("connection.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * FROM users WHERE username=? AND password=?";
$query = $conn->prepare($sql);
$query->execute([$username,$password]);
//$query->setFetchMode(PDO::FETCH_CLASS, "User");
$user = $query->fetch(PDO::FETCH_OBJ);
//var_dump($result->type);
if (isset($user->username)){
    session_start();
    $_SESSION['user']=$user;
    header("Location:src/demo_1/dashboard.php");
} else {
    header("Location:index.php");
}
?>