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
   <title>profile</title>

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

<section class="user-profile">

   <h1 class="heading">your profile</h1>

   <div class="info">

      <div class="user">
       <img src="images/parul.jpg" class="imp" alt="">
       <b><p class="usname"><?php echo $_SESSION['username'] ?></p></b>
       <p class="role">student</p>
     
         <a href="update.php" class="inline-btn">update profile</a>
      </div>
   </div>
      
</section>

















<!-- custom js file link  -->
<script src="script.js"></script>

   
</body>
</html>