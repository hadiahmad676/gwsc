<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: form.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/forms.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
  </head>
  <body>
      <!--Nav Start Start-->
  <nav>
    <header>
    <div class="wrapper">
      <div class="multi_color_border"></div>
      <div class="top_nav">
          <div class="left">
            <div class="logo"><p><span>GW</span>SC</p></div>
            <div class="search_bar">
               <input type="text" placeholder="Search">
            </div>
        </div> 
        <div class="right">
         <ul>
            <li><a href="login.php">LogIn</a></li>
            <li><a href="registration.php">SignUp</a></li>
          </ul>
       </div>
     </div>
     <div class="bottom_nav">
       <ul>
         <li><a href="index.php">Home</a></li>
          <li><a href="information.php">Information</a></li>
          <li><a href="pitch.php">Pitch Types and Availability</a></li>
          <li><a href="review.html">Reviews</a></li>
          <li><a href="features.php">Features</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="map.html">Map</a></li>
         <li><a href="attractions.php">Local Attractions</a></li>
        </ul>
    </div>
  </div>
</header>
</nav>
  <!--Nav Start End-->

<!--Login Form Start-->
     <section>
    <div class="register-container">
    <!--Section Headings Start-->
    <div class="section-headings">
    <h2>Login</h2>
    </div>
    <!--Section Headings End--> 
    <form class="" action="" method="post" autocomplete="off">
      <div class="user-details">

        <div class="input-box">      
        <label for="usernameemail">Username or Email : </label>
        <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
      </div>
      <div class="input-box">  
        <label for="password">Password : </label>
        <input type="password" name="password" id = "password" required value=""> <br>
      </div>
    </div>
      <div class="register-button">
        <button type="submit" name="submit">Login</button>
      </div>
      <div class="register-button">
        <a href="registration.php">Registration</a>
      </div>
    </div>
      </form>
    </section>
      <br>

<!--Footer Start-->
    <footer>
        <div class="footer-container">

            <div class="footer-box">
                <h2>You are here</h2>
                <p class="currentpage">LOGIN</p>
                    <p>Page views
                        <a href="https://www.freecounterstat.com" title="free counter"><img src="https://counter2.optistats.ovh/private/freecounterstat.php?c=r6p42hycpnepuh33dtutyx2atntcfmrg" border="0" title="free counter" alt="free counter"></a></p>
                     <a href="gwsc.xml"><ion-icon class="rss" name="logo-rss"></ion-icon></a>
                     <ul class="logos-footer">
                        <li><a href="#"><ion-icon name="logo-instagram" class="footer-icons"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-facebook" class="footer-icons"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter" class="footer-icons"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-youtube" class="footer-icons"></ion-icon></a></li>
                     </ul>
            </div>

            <div class="footer-box quicklinks">
                <h2>Quick Links</h2>
                <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="information.php">Information</a></li>
                     <li><a href="pitch.php">Pitch Types and Availability</a></li>
                     <li><a href="review.html">Reviews</a></li>
                     <li><a href="features.php">Features</a></li>
                     <li><a href="contact.php">Contact</a></li>
                     <li><a href="map.html">Map</a></li>
                     <li><a href="attractions.php">Local Attractions</a></li>
                     <li><a href="login.php">Login</a></li>
                     <li><a href="registration.php">Sign Up</a></li>
                </ul>
            </div>

            <div class="footer-box quicklinks">
                <h2>Locations</h2>
                <ul>
                    <li><a href="#">Aburi</a></li>
                    <li><a href="#">Ho</a></li>
                    <li><a href="#">Tagbo</a></li>
                </ul>
            </div>

            <div class="footer-box contact">
                <h2>Contact Us</h2>
                <ul class="footer-info">
                    <li>
                        <span><ion-icon name="navigate-outline"></ion-icon></span>
                        <span>71 First Kalpon<br>
                        Accra, Ghana, <br> GHA</span>  
                    </li>
                    <li>
                        <span><ion-icon name="call-outline"></ion-icon></span>
                        <p><a href="tel:+233 50 050 9500">+233 50 050 9500</a><br>
                           <a href="tel:+233 55 258 9515">+233 55 258 9515</a></p>
                    </li>
                    <li>
                        <span><ion-icon name="mail-outline"></ion-icon></span>
                        <p><a href="mailto:vintagerally01@gmail.com">GWSC1@gmail.com</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <div class="copyrightext">
        <p>Copyrightⓒ2023 Global Wild Swimming and Camping</p>
    </div>
    <!--Footer End-->

    <!--Icons Start-->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!--Icons End-->
    <script src="//widget.tagembed.com/embed.min.js" type="text/javascript"></script>

</body>
</html>
