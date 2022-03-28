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

  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $passwordRe = $_POST["re-password"];

  if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password))
  {
    header("Location:http://localhost/Game%20Store/Register.php?error=emptyfields");
    exit();
  }
  else if($password !== $passwordRe)
  {
    header("Location:http://localhost/Game%20Store/Register.php?error=wrongpwd");
    exit();
  }
  else
  {
    $sql = "SELECT DBusername FROM users WHERE DBusername=?";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
      header("Location:http://localhost/Game%20Store/Register.php?error=sqlerror");
      exit();
    }
    else
    {
      mysqli_stmt_bind_param($stmt, "s" , $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);

      if($resultCheck > 0)
      {
        header("Location:http://localhost/Game%20Store/Register.php?error=useduser");
        exit();
      }
      else
      {
        $sql = "INSERT INTO users(DBfirstname, DBlastname, DBemail, DBusername, DBpassword) VALUES(?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql))
        {
          header("Location:http://localhost/Game%20Store/Register.php?error=sqlerror");
          exit();
        }
        else
        {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt,"sssss",$firstname, $lastname, $email, $username, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location:http://localhost/Game%20Store/Index.php?signup=success");
            exit();
        }
      }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }


?>
