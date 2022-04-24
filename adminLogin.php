<?php
include_once "db.php";
session_start();
$username_err = $password_err = '';
$username = '';
$password = '';
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  //catch the values of given by the form 
  $username = $password = '';
  // $email_err = $email =
  $noerrors = true;
  $username = $_POST['u'];
  $password = $_POST['p'];
  //validate the values
  if (empty($username)) {
    $username_err = '<div class="error">Enter the username</div>';
    $noerrors = false;
  }
  if (empty($password)) {
    $password_err = '<div class="error mb-4">Enter the password</div>';
    $noerrors = false;
  }
  if ($noerrors) {
    $noerrors = true;

    $user_query = $conn->query("SELECT * FROM admins WHERE username='$username'");
    if ($user_query->num_rows == 0) {
      $username_err = '<div class="error">Username is not exist.</div>';
      $noerrors = false;
      header("Location:adminLogin.php?msg=User not found!");
    }

    $password_query = $conn->query("SELECT * FROM admins WHERE password='$password'");
    if ($user_query->num_rows == 0) {
      $password_err = '<div class="error">Password is Wrong!</div>';
      $noerrors = false;
      header("Location:adminLogin.php?msg=User not found!");
    }

    if ($noerrors) {
      $sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
      $result = $conn->query($sql);
    
      if ($result->num_rows > 0) {
        $_SESSION['status'] = 'login';
        header("Location:dashboard.php");
      }
    }
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Battvelocity | admin</title>
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="css/loginStyle.css">
  <style>
    .alert{
      color: red;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="login">
    <h1>Login</h1>
    <form method="post">
      <input type="text" name="u" placeholder="Username" required="required" />
      <input type="password" name="p" placeholder="Password" required="required" />
      <button type="submit" class="btn btn-primary btn-block btn-large">
        Submit
      </button>

      <?php
      
      if(isset($_GET['msg'])){
      ?>
      <p class="alert"><?php echo($_GET['msg'])?></p>
      <?php
      
      }?>
    </form>
  </div>
</body>

</html>