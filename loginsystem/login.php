<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "gamestore";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
if(!$conn)
  {
    die("Connection failed: ".mysqli_connect_error());
  }

$mailUser = $_POST['username'];
$password = $_POST['pwd'];

if(empty($mailUser) || empty($password))
{
  header("Location:http://localhost/Game%20Store/Index.php?error=emptyfields");
  exit();
}
else
{
    $sql = "SELECT * FROM users WHERE DBusername=? OR DBemail=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql))
    {
      header("Location:http://localhost/Game%20Store/Index.php?error=sqlerror");
      exit();
    }
    else
    {
      mysqli_stmt_bind_param($stmt, "ss", $mailUser, $mailUser);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result))
      {
        $pwdCheck = password_verify($password, $row['DBpassword']);
        if($pwdCheck == false)
        {
          header("Location:http://localhost/Game%20Store/Index.php?error=wrongpwd");
          exit();
        }
        else
        {
            session_start();
            $_SESSION['uid'] = $row['DBid'];
            $_SESSION['user'] = $row['DBusername'];
            $_SESSION['loggedin'] = true;
            header("Location:http://localhost/Game%20Store/Index.php?login=success");
            exit();
        }
      }
      else
      {
        header("Location:http://localhost/Game%20Store/Index.php?error=nouser");
        exit();
      }
    }
}

 ?>
