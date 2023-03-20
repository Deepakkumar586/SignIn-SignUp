<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/cesiumjs/1.78/Build/Cesium/Cesium.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>
<body>

<div class="signin-form">
    <form action="" method="post">
        <div class="form-header">
            <h2>𝒮𝒾𝑔𝓃𝐼𝒩</h2>
            <p>🅻🅾🅶 🅸🅽 🆃🅾 🅲🅷🅰🆃🆁🅾🅾🅼</p>

        </div>
        <div class="form-group">

        <label>Email</label>
        <input type="text" class="form-control" name="email" placeholder="someone@site.com" autocomplete="off" required>
        </div>

        <div class="form-group">

        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" required>
        </div>
        <div class="small">Forgot password <a href="forgot_php">Click Here</a> </div><br>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-block btn-lg" name="sign_in">Sign in</button>
        </div>

        <?php
        include("signin_user.php");
        ?> 



    </form>
    <div class="text-center small" style="color: black">Don't Have a account <a href="signup.php" style="color: white"> Create one</a></div>
</div>
    
</body>
</html>