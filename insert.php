<?php
session_start();

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'registration');

if(isset($_POST['insert']))
{
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users(`username`,`email`,`password`) VALUES ('$username','$email','$password')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Data Saved Successfully";
        // echo '<script> alert("Your Data is Saved"); </script>';
        header("Location: insertdatabase.php"); 
    }
    else
    {
        $_SESSION['status'] = "Data Not Saved Successfully";
        // echo '<script> alert("Your Data is Saved"); </script>';
        header("Location: insertdatabase.php"); 
    }
}

?>