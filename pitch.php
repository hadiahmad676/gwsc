

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GWSC</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/forms.css">
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

  <!--Search Bar Start-->
<section>
<div class="register-container">
<form method="post">
<div class="user-details">
    <div class="input-box pitchSearch"> 
    <label>Search For Available Pitches (Ho, Aburi, or Tagbo) (Scroll for results)</label>
    <input type="text" name="search">
    </div>
</div>
    <div class="register-button">
    <input type="submit" name="submit">
    </div> 
</div>
</form>
</section>

<?php

$con = new PDO("mysql:host=localhost;dbname=pitch",'root','');

if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `search` WHERE Name = '$str'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    if($row = $sth->fetch())
    {
        ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Available_Slot</th>
                <th>Available_Pitch</th>
            </tr>
            <tr>
                <td><?php echo $row->Name;?></td>
                <td><?php echo $row->Available_Slot;?></td>
                <td><?php echo $row->Available_Pitch;?></td>
            </tr>

        </table>
<?php 
    }
        
        
        else{
            echo "Name Does not exist";
        }


}

?>
  <!--Search Bar End-->
<hr>

  <!--Map Start-->
<div class="googleMap">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127066.75857679047!2d-0.17972944999999999!3d5.5912087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9084b2b7a773%3A0xbed14ed8650e2dd3!2sAccra!5e0!3m2!1sen!2sgh!4v1682443882354!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!--Map End-->

<!--Footer Start-->
    <footer>
        <div class="footer-container">

            <div class="footer-box">
                <h2>You are here</h2>
                <p class="currentpage">PITCH</p>
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