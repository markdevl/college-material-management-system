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
   <title>update</title>

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

<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>update profile</h3>
      <p>update name</p>
      <input type="text" name="name" placeholder="<?php echo "". $_SESSION['username'] ?>" maxlength="50" class="box">
      <p>update email</p>
      <input type="email" name="email" placeholder="enter email-id" maxlength="50" class="box">
      <p>previous password</p>
      <input type="password" name="old_pass" placeholder="enter your old password" maxlength="20" class="box">
      <p>new password</p>
      <input type="password" name="new_pass" placeholder="enter your old password" maxlength="20" class="box">
      <p>confirm password</p>
      <input type="password" name="c_pass" placeholder="confirm your new password" maxlength="20" class="box">
      <p>update pic</p>
      <input type="file" accept="image/*" class="box">
      <input type="submit" value="update profile" name="submit" class="btn">
   </form>

</section>



<!-- custom js file link  -->
<script src="script.js"></script>

   
</body>
</html>