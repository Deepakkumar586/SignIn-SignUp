<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>
<body>

<div class="signup-form">
    <form action="" method="post">
        <div class="form-header">
            <h2>𝒮𝒾𝑔𝓃 𝒰𝓅</h2>
            <p>Fill out this form and start chating with your friends</p>

        </div>
        <div class="form-group">

        <label>Username</label>
        <input type="text" class="form-control" name="user_name" placeholder="Example: deepak" autocomplete="off" required>
        </div>

        <div class="form-group">

            <label>Email Address</label>
            <input type="text" class="form-control" name="user_email" placeholder="someone@site.com" autocomplete="off" required>
            </div>


        <div class="form-group">

        <label>Password</label>
        <input type="password" class="form-control" name="user_password" placeholder="Password" autocomplete="off" required>
        </div>

        <div class="form-group">

        <label>Country</label>
            <select name="user_country" class="form-control" required>
                <option disabled="">Select a Country</option>
                <option>India</option>
                <option>UK</option>
                <option>France</option>
                <option>Pakistan</option>
                <option>United States of America</option>
                <option>Singapur</option>

            </select>    
    </div>

    <div class="form-group">

        <label>Gender</label>
            <select name="user_gender" class="form-control" required>
                <option disabled="">Select a Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
                

            </select>    
        </div>
        <div class="form-group">
            <label  class="checkbox-inline"> <input type="checkbox" required>I accept the <a href="#">Terms os use </a> &amp; <a href="#">Privacy Policy</a> </label>
        </div>

        

        
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block btn-lg" name="sign_up">Sign up</button>
        </div>

         <?php
        include("signup_user.php");
        ?>



    </form>
    <div class="text-center small" style="color: black">Already have a account <a href="signin.php" style="color: white"> Signin here </a></div>
</div>
    
</body>
</html>