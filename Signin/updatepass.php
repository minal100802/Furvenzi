<?php
include '../dbcon.php';

if (isset($_POST['updatepass']))
{
$email = $_POST['email'];
$new_pass = $_POST['newpassword'];
$re_pass = $_POST['confirmnewpassword'];
$password_query = mysqli_query($con, "SELECT * from signin WHERE email LIKE '$email' ORDER BY 'id' ASC");
$password_row = mysqli_fetch_array($password_query);
$database_password = $password_row['password'];
    if ($new_pass == $re_pass)
        {
        $update_pwd = mysqli_query($con, "UPDATE signin set password='$new_pass' where email='$email'");
        echo "<script>alert('Update Sucessfully'); window.location.href='signin(in).php'</script>";
        }
      else
        {
        echo "<script>alert('Your new and Retype Password is not match'); window.location.href='signin(in).php'</script>";
        }
    }

?>