<?php
  session_start();
?>

<!DOCTYPE html>
<html>

  <head>
    <link href="About-Style.css" type="text/css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>

      $(document).ready(function()
      {

      })

    </script>
  </head>

  <body>
    <header>
      <a href="index.php" ><img class="logo" src="images/hey.png"></a>
      <nav>
        <ul class="nav_links">
            <li><a href="index.php">Store</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Contact.php">Contact</a></li>  
        </ul>
      </nav>

      <div class="sys">
        <?php

        if(isset($_GET['error']))
        {
          if($_GET['error'] == "nouser")
            {
              echo "<script type='text/javascript'>alert('ERROR: User Not Found.');</script>";
            }
          else if ($_GET['error'] == "wrongpwd")
            {
              echo "<script type='text/javascript'>alert('ERROR: Wrong Password.');</script>";
            }
            else if($_GET['error'] == "emptyfields")
            {
              echo "<script type='text/javascript'>alert('ERROR: Fill Empty Fields.');</script>";
            }
        }

         if(isset($_SESSION['uid']))
         {
           $name = $_SESSION['user'];
           echo ' <p class="user">Welcome ' . $name. '</p><form action="loginsystem/logout.php" method="post">
             <button type="submit" name="logout" id="logout">LogOut</button>
           </form> ';
         }
         else
         {
             echo ' <form class="login-box" action="loginsystem/login.php" method="post">
               <input type="text" name="username" placeholder="Username">
               <input type="password" name="pwd" placeholder="Password">
               <button type="submit" name="login">Login</button>
             </form>
             <a id="signup" href="Register.php">SignUp</a> ';
         }

        ?>
      </div>
   </header>
   <hr>
   <div class="container">
   <h1>About Us</h1>
   <p>In this website, we serve best of the best games out there, look for whatever game you like and you will diffenetly find it in here Collecting games is our speciality. Do not miss out,
      we will get you the latest relesed games. Also we bring you great offers for your pleasure.  </p>
   <p>If you can not buy from our website , you can visit our Net-Cafe/Store at this location (Amman/Tabarbour) and we let you try our games for <span>FREE</span>, and buy them if you want. Here are few picture of our store.</p>
   <a href="images/store/1.jpg"><img src="images/store/1.jpg"></a>
   <a href="images/store/2.jpg"><img src="images/store/2.jpg"></a>
   <a href="images/store/3.jpg"><img src="images/store/3.jpg"></a>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js" referrerpolicy="no-referrer"></script>
 </body>
</html>
