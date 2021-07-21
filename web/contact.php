<?php

include("connect.php");

$error="";

if (isset($_POST['submit'])){
  $firstName = $_POST['fname'];
  $lastName = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];


$insertQuery = "INSERT INTO contact (FirstName, LastName, Email, Phone, Message) VALUES ('$firstName', '$lastName', '$email', '$phone', '$message')";


  if (mysqli_query($con,$insertQuery)){
      $error = "Your message successfully submited";
  }else{
      $error = "You are unsuccessfully try again";
  }

}

?>

<html>
<head>
  <title>Contact page</title>
  <link rel="stylesheet" href="css/style.css"/>
  <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

</head>

<body>
  <div id="wrapper">
    <div id="menu">
      <a href="index.php">Sign up</a>
      <a href="login.php">Login</a>
      <a href="contact.php">Contact</a>
    </div>
    <div id="error"><?php echo $error; ?></div>
    <div id="formdiv">
    <form method="POST" action="contact.php" enctype="multipart/form-data">
        <label>First Name: </label><br/>
        <input type="text" name="fname" class="inputFields" required/> <br/><br/>

        <label>Last Name: </label><br/>
        <input type="text" name="lname" class="inputFields" required/><br/><br/>

        <label>Email: </label><br/>
        <input type="text" name="email" class="inputFields" required/><br/><br/>

        <label>Phone: </label><br/>
        <input type="text" name="phone" class="inputFields" required/><br/><br/>

        <label>Message: </label><br/>
        <input type="text" name="message" class="inputFields" required/><br/><br/>

        <input type="submit" class="theButtons" name="submit"/><br/>
      </form>
    </div>
  </div>

</body>
</html>
