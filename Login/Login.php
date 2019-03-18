<?php
session_start();
include '../Connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" || $password == "")
{
    header("location: Form-Login.php");
}
else
{
    $query = "SELECT * FROM User WHERE username = '$username' AND Password = '$password'";
    $result = mysqli_query($connect, $query);

    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        header("location: ../Dosen/Read.php");
        $_SESSION['User'] = $username;
    }
    else
    {
        header("location: From-Login.php");
    }
}

?>