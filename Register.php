<!DOCTYPE html>
<html>
  <head>
    <link href="Register-Style.css" type="text/css" rel="stylesheet">
  </head>
  <body style="background-color:#24252A;">

    <header>
      <nav>
        <ul class="nav_links">
            <li><a href="index.php">Store</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Contact.php">Contact</a></li>
        <ul>
      </nav>
   </header>

    <div class="Register-box ">
      <h1>Register Here</h1>
      <?php
        if(isset($_GET['error']))
        {
          if($_GET['error'] == "emptyfields")
            {
              echo "<script type='text/javascript'>alert('ERROR: Fill All The Fields.');</script>";
            }
          else if ($_GET['error'] == "useduser")
            {
              echo "<script type='text/javascript'>alert('ERROR: This Username is Not Available.');</script>";
            }
            else if($_GET['error'] == "wrongpwd")
            {
              echo "<script type='text/javascript'>alert('ERROR: Wrong Password.');</script>";
            }
        }
       ?>

      <form action="http://localhost/Game%20Store/loginsystem/signup.php" method="post">
        <p>First Name</p>
        <input type="text" name="firstname" placeholder="Enter First Name" required>
        <p>Last Name</p>
        <input type="text" name="lastname" placeholder="Enter Last Name" required>
        <p>Email</p>
        <input type="email" name="email" placeholder="Enter Email" required>
        <p>Username</p>
        <input type="text" name="username" placeholder="Enter Username" required>
        <p>Password</p>
        <input type="password" name="password" placeholder="Enter Passoword" required>
        <p>Repeat Password</p>
        <input type="password" name="re-password" placeholder="Enter Passoword Again" required>
        <input type="submit" name="submit" value="Register">
      </form>
    </div>
  </body>
</html>
