<?php
  session_start();
?>
<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "gamestore";

$connect = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
if(isset($_POST["btnsend"])){
  $users=$_POST["username"];
  $emails=$_POST["email"];
  $messages=$_POST["message"];
  $ins="INSERT INTO contactus (username , email , message ) VALUES('$users' , '$emails' , '$messages') ";
  $res=mysqli_query($connect,$ins);
}
?>
<!DOCTYPE html>
<html>

  <head>
    <link href="Contact-Style.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>

      $(document).ready(function()
      {

      })

    </script>
  </head>

  <body>
    <header>
      <a href="Index.php" ><img class="logo" src="images/hey.png"></a>
      <nav>
        <ul class="nav_links">
            <li><a href="Index.php">Store</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Contact.php">Contact</a></li>
        <ul>
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

   <div class="header">
     <h1>Contact Us</h1>
   </div>

   <div class="form">
     <form action="" method="POST">
       <input type="text" placeholder="Username" name="username" required>
       <input type="email" placeholder="E-Mail" name="email" required>
       <textarea id="msg" rows="8" cols="10" placeholder="Message" name="message" required ></textarea>
       <button type="submit" class="send" name="btnsend"> Send </button> 
        </form>
        </div>
        
 </body>
</html>
