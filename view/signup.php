
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<?php include'header-costumer.html'; ?>

<div class="dangnhap">
    <p>dang ky</p>
        <form action="../controller/c_signup.php" method="post" enctype="multipart/form-data">
           
            <div class="name">

                <input type="text" name="name" id="" placeholder="Họ và tên" default="">
                <hr>
            </div>
            <div class="login_name">

                <input type="email" name="email" id="" placeholder="Email" default="">
                <hr>
            </div>
            <div class="login_pass">

                <input type="password" name="password" id="" placeholder="Mật khẩu của bạn">
                <hr>
            </div>
           
        
           

            <div class="bt">
                <button type="submit" name="login"><a href="login.php">Đăng Nhập</a></button>

                <button type="submit" name="dky"> Đăng ký </button>
            </div>
            <a href="reset.php"> Quên mật khẩu </a>


        </form>
    </div>
    
</body>
</html>