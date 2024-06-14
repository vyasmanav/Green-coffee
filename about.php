<?php
include 'components/connection.php';
session_start();
if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
    }else{
        $user_id = '';
    }

    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
?>
<style type="text/css">
    <?php include 'style.css';?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <script src="https://kit.fontawesome.com/e7a822e768.js" crossorigin="anonymous"></script> -->
    <title>Green Coffee - about us page</title>

</head>
<body>
    <?php include 'components/header.php';?>
    <div class="main">
        <div class="banner">
            <h1>About us</h1>
        </div>
        <div class="title2">
            <a href="home.php">Home</a><span>About</span>
        </div>
      <div class="about-category">
        <div class="box">
            <img src="img/3.webp" alt="">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Green</h1>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="img/about.png" alt="">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Teaname</h1>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="img/2.webp" alt="">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Teaname</h1>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
        </div>
        <div class="box">
            <img src="img/1.webp" alt="">
            <div class="detail">
                <span>Coffee</span>
                <h1>Lemon Green</h1>
                <a href="view_products.php" class="btn">Shop now</a>
            </div>
        </div>
      </div>
      <section class="services">
        <div class="title">
            <img src="img/download.png" class="logo">
            <h1>Why choose us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati repellat voluptatum at facere beatae? Quo similique dignissimos reprehenderit saepe vitae.</p>
        </div>
    <div class="box-container">
        <div class="box">
            <img src="img/icon2.png" alt="">
            <div class="detail">
                <h3>Great Savings</h3>
                <p>Save big per every order</p>
            </div>
        </div>
        <div class="box">
            <img src="img/icon1.png" alt="">
            <div class="detail">
                <h3>24*7 support</h3>
                <p>one on one support</p>
            </div>
        </div>
        <div class="box">
            <img src="img/icon0.png" alt="">
            <div class="detail">
                <h3>Gift vouchers</h3>
                <p>Vouchers on every festivals</p>
            </div>
        </div>
        <div class="box">
            <img src="img/icon.png" alt="">
            <div class="detail">
                <h3>Worldwide delivery</h3>
                <p>Dropship Worldwide</p>
            </div>
        </div>
    </div>
</section>
<div class="about">
    <div class="row">
        <div class="img-box">
            <img src="img/3.png" alt="">
        </div>
        <div class="detail">
            <h1>Visit our beautiful showroom</h1>
            <p>Our showroom is an expression of what we love doing; being creative with floral and plant arrangements.
                Whether you are looking for a florist for your perfect wedding, or just want to uplift any room with some one of a kind  living decor, Blossom With Love can help.                            
            </p>
            <a href="view_products.php" class="btn">Shop now</a>
        </div>
    </div>
</div>
<div class="testimonial-container">
    <div class="title">
        <img src="img/download.png" class="logo">
        <h1>what people say about us</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate provident deleniti, ducimus debitis dolor quis officia ut voluptates facilis tempore?</p>
        </div>
        <div class="container">
            <div class="testimonial-item active">
                <img src="img/01.jpg" alt="">
                <h1>sara smith</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio reprehenderit esse similique quibusdam libero saepe optio velit eum nostrum accusamus enim sed excepturi obcaecati aut ipsa reiciendis deleniti dicta dolor, expedita quae sapiente hic voluptates quo doloremque? Odit, eos et?</p>
            </div>
            
            <div class="testimonial-item">
                <img src="img/02.jpg" alt="">
                <h1>john smith</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio reprehenderit esse similique quibusdam libero saepe optio velit eum nostrum accusamus enim sed excepturi obcaecati aut ipsa reiciendis deleniti dicta dolor, expedita quae sapiente hic voluptates quo doloremque? Odit, eos et?</p>
            </div>
            <div class="testimonial-item">
                <img src="img/03.jpg" alt="">
                <h1>selena ansari</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio reprehenderit esse similique quibusdam libero saepe optio velit eum nostrum accusamus enim sed excepturi obcaecati aut ipsa reiciendis deleniti dicta dolor, expedita quae sapiente hic voluptates quo doloremque? Odit, eos et?</p>
            </div>
            <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
            <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
        </div>
    
</div>
    <?php include 'components/footer.php'; ?>    

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script> 
    <?php include 'components/alert.php'; ?>   

</body>
</html>