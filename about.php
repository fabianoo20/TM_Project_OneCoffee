<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>There are many reasons to choose our premium office coffee service.
            We are 100% BC owned and Operated
            We have two decades of office coffee experience
            We are the Exclusive Office Coffee Distributor of Commercial Drive Coffees.
            We are an Authorized Provider of Starbucks Market Place Coffees
            We are an Authorized provider of Seattle Best Coffee and Torrefazione Coffees.
            We are an Authorized provider of Ethical Bean Coffees.</p>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p>After you picked a restaurant to order from, you can decide how you want to get your food and what to order.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p>No need to worry about long delivery times, your order will be delivered to your door in just 15 minutes!</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Affordable prices</h3>
         <p>Check our daily promotions to get the cheapest prices every day!</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer review</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>Thank you for the spirited OneCoffe employee service</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>Nice to hang out here. The employees are also friendly. Moreover, there is a smoking area available. So the place of choice every time you get together with friends. The drinks taste really good too.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>lita</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>Friendly service and delicious food supported by a comfortable atmosphere, perfect for hanging out with friends or business partners</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>steven</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>Have stopped by for coffee twice, while waiting to be picked up by the driver, comfortable for hanging out / just relaxing coffee</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>monica</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>There is a smoking area facing the exit and entrance of pedestrians. not boring. the internet is super fast and the servers are super best too.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>agus</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>The place is not too big and quite clean although sometimes there is still a lot of tissue waste on the chairs or tables. The staff is good. The coffee tastes like espresso, cappuccino, mocca, all delicious</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>emiliana</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>