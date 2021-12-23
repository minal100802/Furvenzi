<?php
    session_start();
    include '../dbcon.php';
    if(isset($_POST['signup_submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = "SELECT * FROM `signin` WHERE `email` LIKE '$email' ORDER BY `id` ASC";
        $query = mysqli_query($con, $email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count)
        {
          $email_pass = mysqli_fetch_assoc($query);
          $db_pass = $email_pass['password'];
          $_SESSION['user_name'] = $email_pass['name'];
          $_SESSION['id'] = $email_pass['id'];
          if($password == $db_pass)
          {
            //$_SESSION['name']
            //echo "<h1> MAIN PAGE </h1>";
            header("location: ../index.php");
          }
          else
          {
            echo "Wrong Password";
          }
        }
        else
        {
          echo "Wrong email id";
        }
    }  
?>