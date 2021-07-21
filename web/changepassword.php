<?php

include("connect.php");
include("functions.php");
$error = "";

if(isset($_POST['submit'])){
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
    $email = $_SESSION['email'];
    if (mysqli_query($con, "UPDATE users SET password='$New_password' where email='$email'")){
      $error="Password changed successfully, <a href='profile.php'>Click here</a> to go to the profile";
    }

  }

}

if(logged_in())
{
 ?>


 <div id="error"><?php echo $error; ?></div>

 <form method="POST" action="changepassword.php">
     <label>New Password: </label><br/>
     <input type="password" name="password"/><br/><br/>
     <label>Re-enter Password: </label><br/>
     <input type="password" name="passwordConfirm"/><br/><br/>
     <input type="submit" name="submit" value="Save"/><br/>
  </form>
<?php
}else {
  header("location: login.php");
}
  ?>
