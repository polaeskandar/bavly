<?php

require_once "./includes/layout/header.php";
require_once "./includes/layout/nav.php";
require_once 'connect.php';
require_once 'functions.php';

?>

<section class="main">
    <div class="index-details-container">
        <h2>مرحباً بكم اسمي هو<span class="name-span">بافلي وجيه</span></h2>
        <h3 class="intro-text">انا من كنيسة السيدة العذراء مريم والقديس سيدهم بشاي</h3>
        <a href="content.php" class="main-btn">مشاهدة صفحه الاباء البطاركة</a>
        <div class="social-icons">
            <a href="https://www.facebook.com/bavly.gamer.3/"><i class="fab fa-facebook"></i></a>
            <a href="https://api.whatsapp.com/send?phone=201063325054 "><i class="fab fa-whatsapp"></i></a>
            <a href="mailto:bavlywagih696@gmail.com"><i class="fa fa-envelope"></i></a>
        </div>
    </div>
    <div class="index-image-container">
        <img src="media/img/index.png" class="img-fluid" alt="patriarchs_image">
    </div>
</section>

<?php require_once './includes/layout/footer.php'; ?>