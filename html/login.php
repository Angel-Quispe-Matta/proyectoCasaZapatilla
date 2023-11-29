<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php $puertoweb ?>/proyecto/assets/css/login.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="validar.php" method="post">
          <div class="user-box">
            <input type="text" name="correo" required="">
            <label>Username</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
          <a href="#"><span></span>
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" value= "Ingresar"></a>
            
        </form>
      </div>
</body>
</html>
