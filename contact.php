<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
   header("location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<header class="header">

<section class="flex">

   <a href="Educa.php" class="logo">Educa.</a>

   

   <div class="icons">
      <a href="Educa.php">
         <div id="home-btn" class="fas fa-home"></div>
      </a>
      <div id="user-btn" class="fas fa-user"></div>
      <a href="contact.php">
         <div id="contact-btn" class="fas fa-broadcast-tower"></div>
      </a>
      <div id="toggle-btn" class="fas fa-sun"></div>

   </div>

   <div class="profile">
      <img src="images/parul.jpg" class="image" alt="">
      <p class="name"><?php echo "welcome " . $_SESSION['username'] ?></p>
      <p class="role">student</p>
      <a href="profile.php" class="btn">view profile</a>
      <div class="flex-btn">
         <a href="logout.php" class="option-btn">logout</a>
      </div>
   </div>

</section>

</header>

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>
  


      <form action="https://formspree.io/f/xzbqjdqg" method="POST">
         <h3>get in touch</h3>
         <input type="text" placeholder="enter your name" name="name" required maxlength="50" class="box">
         <input type="email" placeholder="enter your email" id="email" name="email" required maxlength="50" class="box">
         <input type="number" placeholder="enter your number" name="number" required maxlength="50" class="box">
         <textarea name="message" class="box" placeholder="enter your message" required maxlength="1000" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="inline-btn" name="submit">
      </form>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <a href="tel:6355051444">6355051444</a>
         
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <a href="mailto:piyushupadhyay830@gmail.com">piyushupadhyay830@gmail.com</a>
         
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>office address</h3>
         <a href="#">parul university</a>
      </div>

   </div>

</section>
















<!-- custom js file link  -->
<script src="script.js"></script>


   
</body>
</html>