<?php

include("connect.php");
include("functions.php");
$error = "";
$url = $_SERVER['REQUEST_URI'];
// $parts = parse_url($url);
 $error= $url;
$parse = explode("=",$url);
  $email = $parse[1];
  $error= $email;
// parse_str($parts['query'], $query);
// // echo $query['email'];
if(isset($_POST['submit'])){
  $error= "sss";
  $New_password = $_POST['password'];
  $New_confirmPassword = $_POST['passwordConfirm'];

  if (strlen($New_password) < 5){
    $error = "Passwrod must be greater than five characters";
  }
  //compare password
  else if ($New_password !== $New_confirmPassword ){
    $error = "Password does not match!";
  }
  else {
    //$New_password = md5($New_password);
    $New_password = password_hash($New_password, PASSWORD_DEFAULT);
    //make update statement
    // $email = $_SESSION['email'];
    echo "hi".$email;
    if (mysqli_query($con, "UPDATE users SET password='$New_password' where email='$email'")){
      $error="Password changed successfully, <a href='profile.php'>Click here</a> to go to the profile";
    }
  }
}

 ?>
<html>
<head>
  <title>Dynamic Website</title>
  <link rel="stylesheet" href="css/style.css"/>
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
</head>
<body>
  <div id="wrapper">
    <div class="logind">
      <div id="formdiv">
        <div id="error"  style=" <?php  if($error !=""){ ?>  display:block; <?php } ?> "><?php echo $error; ?></div>
        <div class="login-head">
          <h1 id='fline'>Forget Password</h1>
        </div>
        <form method="POST" action="changepassword.php?email=saneesh4239@gmail.com" enctype="multipart/form-data">
          <label>New Password: </label><br/>
          <input type="password" name="password"/><br/><br/>
          <label>Re-enter Password: </label><br/>
          <input type="password" name="passwordConfirm"/><br/><br/>
          <br/>
          <br/>
          <input type="submit" name="submit" class="theButtons" value="change"/><br/>
        </form>
      </div>
    </div>
  </div>
</body>
</html>

 <div 
