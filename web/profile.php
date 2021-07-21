<?php

	include("connect.php");
	include("functions.php");

	if(logged_in())
	{
	?>

		<a href="changepassword.php" style=" float:left; padding:10px; margin-right:40px; background-color:#eee; color:#333; text-decoration:none;">Change Password</a>
		<a href="logout.php" style="float:right; padding:10px;  background-color:#eee; color:#333; text-decoration:none;">Logout</a>

	<?php

	}
	else
	{
		header("location:login.php");
		exit();
	}

?>

<html>
 <head>
    <title>User Profile</title>
    <link rel="stylesheet" href ="css/style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
 </head>

<body>

</body>
</html>
