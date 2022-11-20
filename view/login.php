<?php
include '../view/header-costumer.php';
include '../model/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="login">
        <form  action="../controller/c_login.php"  method="post" enctype="multipart/form-data">
            <p>Đăng nhập</p> 
            <div class="login_name">

                <input type="email" name="email" id="" placeholder="Email" default="">
                <hr>
            </div>
            <div class="login_pass">

                <input type="password" name="password" id="" placeholder="Mật khẩu của bạn">
                <hr>
            </div>

            <div class="bt">
                <button type="submit" name="login">Đăng Nhập</button>

                <button name="dk"><a href="dky.php"> Đăng ký </a></button>
            </div>
            <a href="reset.php"> Quên mật khẩu </a>
        </form>
    </div>

    
</body>
</html>