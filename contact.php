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
    <title>Green Coffee - home page</title>

</head>
<body>
    <?php include 'components/header.php';?>
    <div class="main">
        <div class="banner">
            <h1>Contact us</h1>
        </div>
        <div class="title2">
            <a href="home.php">Home</a><span>Contact Us</span>
        </div>
        <section class="services">
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
<div class="form-container">
    <form action="" method="post">
        <div class="title">
            <img src="img/download.png" class="logo">
            <h1>leave a message</h1>
        </div>
        <div class="input-field">
            <p>your name </p>
            <input type="text" name="name">
        </div>
        <div class="input-field">
            <p>your email</p>
            <input type="email" name="email">
        </div>
         <div class="input-field">
            <p>your number</p>
            <input type="text" name="number">
        </div>
        <div class="input-field">
            <p>your message </p>
            <textarea name="message"></textarea>
        </div>
        <button type="submit" name="submit-btn" class="btn">Send message</button>
        
    </form>
    
</div>
<div class="address">
        <div class="title">
            <img src="img/download.png" class="logo">
            <h1>contact detail</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="box-container">
            <div class="box">
                <i class="bx bxs-map-pin"></i>
                <div>
                    <h4>address</h4>
                    <p>1092 Merigold Lane,Coral Way</p>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-phone-call"></i>
                <div>
                    <h4>phone number</h4>
                    <p>8866889955</p>
                </div>
            </div>
            <div class="box">
                <i class="bx bxs-map-pin"></i>
                <div>
                    <h4>email</h4>
                    <p>selenaAnsari@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
      
     <?php include 'components/footer.php'; ?> 


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script> 
    <?php include 'components/alert.php'; ?>   

</body>
</html>