<?php

	include("connect.php");
	include("functions.php");

	if(logged_in())
	{
	?>

		

	<?php

	}
	else
	{
		header("location:login.php");
		exit();
	}

    if(isset($_POST['submit']) && $_POST['new']==1){
    $name = $_POST['itemName'];
    $category =$_REQUEST['category'];
    $price = $_REQUEST['price'];
    $ins_query="insert into menu
    (`name`,`category`,`price`)values
    ('$name','$category','$price')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    echo "New item added successfully";

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

    <h1 id='fline'>Add New Item</h1>
  </div>
  
    <form method="POST" action="additem.php" enctype="multipart/form-data">
        <input type="hidden" name="new" value="1" />
        <label>Item Name: </label><br/>
        <input type="text" name="itemName" class="inputFields" required/><br/><br/>

        <label>Category: </label><br/>
        <select id="category" name="category" style="width:100%;height:40px;border-radius:10px;">                      
                <option value="Hot">Hot</option>
                <option value="Cold">Cold</option>
        </select>

<br/><br/>
    
        <label>Price: </label><br/>
        <input type="text" name="price" class="inputFields" required/><br/><br/>

        <br/>
        <br/>
        <input type="submit" name="submit" class="theButtons" value="Add Item"/><br/>
        <br>
        <div class="login">
               <button><a href="home.php" style="text:decoration:none;color:Burlywood">Back to home</a></button> 
        </div>
        <br/>
        <br/>
      </form>
    </div>
  </div>
</div>
</body>
</html>
