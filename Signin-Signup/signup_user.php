<?php
include("partials/connection.php");

if(isset($_POST['sign_up'])){
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $country = $_POST['user_country'];
    $gender = $_POST['user_gender'];
    $rand = rand(1,2);

    if($name == ""){
        echo" <script> alert('Please enter your name') </script>";
    }
    if(strlen($password)<8){
        echo" <script> alert('password should be minimum 8 character') </script>";
        exit();
    }
    
    $check_email = "SELECT * FROM `chatusers` where user_email='$email'";
    $result = mysqli_query($conn,$check_email);
    $check = mysqli_num_rows($result);

    if($check==1){
        echo" <script> alert('Email already exist,Please try again!') </script>";
        echo "<script>window.open('signup.php', '_self')</script>";
        exit();
    }
    if($rand == 1)
        $profile_pic = "img/man1.jpg";
        // elseif($rand == 2)
        //     $profile_pic = "img/man2.jpg";

            $insert_data = "insert into `chatusers` (user_name,user_email,user_pass,user_country,user_profile,user_gender) values('$name','$email','$password','$country','$gender',' $profile_pic')";
            $query = mysqli_query($conn,$insert_data);
            if($query){
                echo" <script> alert('Congratulations $name, your account has been created successfully') </script>";

                echo "<script>window.open('signin.php', '_self')</script>";
            }
            else{
                echo" <script> alert('Your Registration failed, try again!') </script>";
                echo "<script>window.open('signup.php', '_self')</script>";
            }
        }


?>