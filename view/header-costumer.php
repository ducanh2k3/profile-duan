<!DOCTYPE html>
<html lang="en">
    <?php       session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header-costumer.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&family=Roboto:ital,wght@0,100;1,100&display=swap"
        rel="stylesheet">

</head>

<body>
    <header>

        <div class="row-header">
            <div>
                <img src="../img/NEW.png" width="65%">
            </div>
            <div class="" style="margin: auto; line-height: 50px;display: flex;align-items:center ;">
                <a href="">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
<form action="../controller/find.php" method="get">
                <input type="text" name="find" id="" placeholder="Search..." style="margin-bottom: 12px;">
                <button onclick="" name="search" style="border: 0;margin-bottom: 12px; margin-left: 10px;" class="header-button">
                    <ion-icon name="search"></ion-icon>
                </button>
            </form>
            </div>
    </header>

    <nav class="sticky">
        <div class="sticky">
            <div><a href="../view/home.php">HOME</a>
                <a href="">HEALTH</a>
                <a href="">DESIGN</a>
                <a href="">SPORT</a>
                <a href="">CONTACT</a>
                <hr>
            </div>

            <?php
      
         
          
             if (isset($_SESSION['user'])){
           
            ?>
Xin chao  <?php echo $_SESSION['user'] ?>
<form action="" method="post">
<button name="logout" class="button button2">Logout</button>
</form>
<?php 
include '../model/db.php';
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: ../view/home.php');

}

?>
            <?php } else {?>
            <div>
              
                <button class="button button1"><a href="../view/login.php">Login</a> </button>
                <button class="button button2"><a href="../view/login.php">Regis</a> </button>

                <hr>
            </div>
            <?php } ?>
    </nav>


    </div>
    <div class="slideshow-container">

        <div class="mySlides fade">

            <img src="https://cdn.tgdd.vn/Files/2021/04/11/1342554/mon-the-thao-ban-nen-thu-trong-nhung-ngay-he-de-9.jpg"
                style="width:1000px;height: 350px;">
            <div class="text">Sport</div>
        </div>

        <div class="mySlides fade">

            <img src="https://www.reconversionprofessionnelle.org/wp-content/uploads/2022/04/dessins-design-produit-innovant-990x556.png"
                style="width:1000px;height: 350px;">
            <div class="text">Design</div>
        </div>

        <div class="mySlides fade">

            <img src="https://www.healthcareitnews.com/sites/hitn/files/Doctor%20at%20computer%2C%20hologram%20illustration_2.jpg"
                style="width:1000px;height: 350px;">
            <div class="text">Health</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a> 

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</body>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script >
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

</html>