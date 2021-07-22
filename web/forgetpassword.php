 <?php

include("connect.php");
include("functions.php");
$error = "";
if(isset($_POST['submit'])){
    // $error = "hiii";
  $toemail = $_POST['mail'];  
//   $query_password=mysqli_query($con, "SELECT password FROM users WHERE email = '$toemail'");
  $subject = "change password";
  $body = "Hello $toemail,please click the link to change your password http://localhost/web1/Web-Development-III-Project-Group-4-main/web/changepassword.php?email=$toemail";
  $headers = "From: saneesh4239@gmail.com";    
    $query_emails = mysqli_query ($con, "SELECT * FROM users WHERE email = '$toemail'");
    $numEmail = mysqli_num_rows ($query_emails);
    if($numEmail==0){
        $error= "user doesn't exist";
    }
    else if (mail($toemail, $subject, $body, $headers)){
        $error= "Email successfully sent to $toemail";
    }else{
        $error = "Email sending failed ....";
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
    <form method="POST" action="forgetpassword.php" enctype="multipart/form-data">

        <label>Email: </label><br/>
        <input type="text" name="mail" class="inputFields" required/><br/><br/>
        <br/>
        <br/>
        <input type="submit" name="submit" class="theButtons" value="Submit"/><br/>
      </form>
    </div>
  </div>
</div>
</body>
</html>
