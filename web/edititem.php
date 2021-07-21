<?php

	include("connect.php");
	include("functions.php");

	if(logged_in())
	{
	?>

		<!-- <a href="changepassword.php" style=" float:left; padding:10px; margin-right:40px; background-color:#eee; color:#333; text-decoration:none;">Change Password</a>
		<a href="logout.php" style="float:right; padding:10px;  background-color:#eee; color:#333; text-decoration:none;">Logout</a> -->

	<?php

	}
	else
	{
		header("location:login.php");
		exit();
	}

    if (isset($_POST['Edit'])){
        $menuId=$_POST['id'];
        $name = $_POST['itemName'];
        $category = $_POST['category'];
        $price = $_POST['price'];
      
      #Get the email address form Database
      $update="update menu set name='".$name."',
      category='".$category."', price='".$price."' where menuId='".$menuId."'";
      $query_emails = mysqli_query ($con, $update);
    }  
      
?>

<html>
 <head>
    <title>User Profile</title>
    <link rel="stylesheet" href ="css/style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
 </head>

<body>
<button style="float:left;border-radius: 20px;padding: 14px 20px;background-color: rgb(77, 34, 34);"><a href="home.php" style="text-decoration:none;color:Burlywood">Back to home</a></button>     
<div class="hot">
           <br>
           <h1 id="vishead">Our Menu</h1>
           <br>
        
        <br/>
        <br/>
           <br>
         <?php
         $result = mysqli_query($con,"SELECT * FROM menu");?>
         <div class="login-head" style="color:Black;">
         
       </div>
       <form method="POST" action=edititem.php enctype="multipart/form-data">
       <?php
         
         echo "<table style='margin:auto;'>
         <tr>
         <th>Name</th>
         <th>Category</th>
         <th>Price</th>
         </tr>";
         
         while($row = mysqli_fetch_array($result))
         {
         echo "<input name='id' type='hidden' value=" . $row['menuId'] ." />";
         echo "<tr>";
         echo "<td><input type='text' name='itemName' value=" . $row['name'] . "></td>";
         echo "<td><input type='text' name='category' value=" . $row['category'] . "></td>";
         echo "<td><input type='text' name='price' value=" . $row['price'] . "></td>";
         echo "<td><input type='submit' name='Edit' value='Edit'></td>";
         echo "<td><button name='Delete' style='float:left;border-radius: 20px;padding: 8px 15px;background-color: rgb(77, 34, 34);color:Burlywood'>Delete</button></td>";
         echo "</tr>";
         }
         echo "</table>";
        ?>
        <div class="login">
               <button style="float:left;"><a href="home.php" style="text:decoration:none;color:Burlywood">Back to home</a></button> 
        </div>
        </div>
        </form>
</body>
</html>
