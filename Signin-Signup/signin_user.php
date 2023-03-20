<?php

session_start();
include("partials/connection.php");
        if(isset($_POST['sign_in'])){
            $email = $_POST['email'];
            $pass = $_POST['password'];

            $select_user = "SELECT * FROM `chatusers` where user_email='$email' AND user_pass='$pass'";
            $query = mysqli_query($conn,$select_user);
            $check_user = mysqli_num_rows($query);

            if($check_user == 1){
                $_SESSION['user_email'] = $email;
                $update_msg = mysqli_query($conn, "UPDATE chatusers SET log_in='online' WHERE  user_email='$email'");

                $user = $_SESSION['user_email'];
                $get_user = "Select * from chatusers where user_email='$user'";
                $run_user = mysqli_query($conn,$get_user);
                $row = mysqli_fetch_array($run_user);

                $user_name = $row['user_name'];
                echo "<script>window.open('home.php?user_name=$user_name','_self')</script>";

            }
            else {
                echo "<div class-'alert-danger'>
                <strong>Check your email and passeord.</strong>
                </div>";
            }
        }
?>