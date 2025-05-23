<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/img 7.jpg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Affordable Prices Beautiful flowers for every budget.</p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>Fresh Flower Arrangements Beautiful, seasonal blooms for all occasions.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/img 6.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/img 8.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>At The Flower Nook, we are passionate about bringing beauty and joy through the art of floral design</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-15.png" alt="">
            <p>Beautiful flowers and fast delivery! Will order again!.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Thana</h3>
        </div>

        <div class="box">
            <img src="images/pic-7.png" alt="">
            <p>Amazing service! The bouquet was perfect.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>tharu</h3>
        </div>

        <div class="box">
            <img src="images/pic-13.png" alt="">
            <p>The flowers were fresh and smelled incredible!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john </h3>
        </div>

        <div class="box">
            <img src="images/pic-18.png" alt="">
            <p>Excellent arrangement and timely delivery!.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Abe</h3>
        </div>

        <div class="box">
            <img src="images/pic-14.png" alt="">
            <p>Great experience! Lovely flowers and friendly staff.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kumar</h3>
        </div>

        <div class="box">
            <img src="images/pic-17.png" alt="">
            <p>Highly recommend! Beautiful blooms and great service.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Kala</h3>
        </div>

    </div>

</section>


<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>