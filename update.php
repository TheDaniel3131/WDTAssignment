<?php
session_start();
$con = mysqli_connect("localhost","root","","registration");

if(isset($_POST['update_user_details']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE users SET username='$name', email='$email', password='$password' WHERE id='$id' ";
    $query_run = mysqli_query($con, $query);

    if ($query_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: updatedatabase.php"); //data updated 
    }
    
    else 
    {
        $_SESSION['status'] ==  "Data Updated Unsuccessfully!!";
        header("Location: updatedatabase.php"); //data not updated
    }
}

?>