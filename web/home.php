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

?>
<html>
    <head>
        <title>Hug a Mug</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
  
        
    </head>
    <!-- <body onclick="getCurrentDate()"> -->
      <body>

        <header>
            
            <!--To set a simple logo for the website which can be seen in menubar. It is created using svg file-->
             <div class="logo">  
              <img src="svg/logo2.png" alt="Hug A Mug">
              <!-- <span id="logotext"><h4>Hug a Mug</h4></span> -->
             </div>
             <!--Available menu options. Just for Milestone B. Not finalized-->
             <nav id='nav'>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/aboutus">About</a></li>
                </ul>
             </nav>
             <div class="login">
               <button style="width:auto;"><a href="profile.php" style="text:decoration:none;color:Burlywood">Profile</a></button> 
               <button style="width:auto;"><a href="logout.php" style="text:decoration:none;color:Burlywood">Log Out</a></button>
             </div>
        </header>

        <!-- Grid start-->
        <div id="grid">
          <div id="coverimg"></div>
          <div id="topl"></div>
          <div id="topr"></div>
          <div id="capt1" style="background-color: blurywood; color: black;"><h3 id="firstl">Feel The Coffee</h3> 
            <br>
          <p id="sline">Start your day with a steaming fresh <br> cup of coffee...</p>
            <br>
            
          <br><br>
          </div>
          <img id="coverimg" src="./pictures/cover2.jpg" alt="https://j.17qq.com/article/iifhopojz.html" style="display: none;">
         
        <!--To state vision-->
        <div class="vision">
          <br>
          <br>
          <br>
         <h1 id="vishead">Our Menu</h1>
         <br>
    </div>
    <br>
         <!-- <p id="vis"> "Our vision is to help people who want to learn new skills."</p> -->
         <div class="hot">
           <br>
           <h1 id="vishead">Our Menu</h1>
           <br>
         <?php
         $result = mysqli_query($con,"SELECT * FROM menu where category='Hot'");?>
         <div class="login-head" style="color:Black;">
         <h1 id='fline'>Hot Drinks</h1>
       </div>
       <?php
         echo "<table style='margin:auto;'>
         <tr>
         <th>Name</th>
         <th></th>
         <th>Price</th>
         </tr>";
         
         while($row = mysqli_fetch_array($result))
         {
         echo "<tr>";
         echo "<td>" . $row['name'] . "</td>";
         echo "<td>.........................................</td>";
         echo "<td>" . $row['price'] . "</td>";
         echo "</tr>";
         }
         echo "</table>";
        ?>
        </div>
        <div class="cold">
        <br>
        <br>
        <br>
        <br>
        <?php
         $result = mysqli_query($con,"SELECT * FROM menu where category='Cold'");?>
         <div class="login-head" style="color:Black;">
         <h1 id='fline'>Cold Drinks</h1>
       </div>
       <?php
         echo "<table style='margin:auto;'>
         <tr>
         <th>Name</th>
         <th></th>
         <th>Price</th>
         </tr>";
         
         while($row = mysqli_fetch_array($result))
         {
         echo "<tr>";
         echo "<td>" . $row['name'] . "</td>";
         echo "<td>.........................................</td>";
         echo "<td>" . $row['price'] . "</td>";
         echo "</tr>";
         }
         echo "</table>";
         if($_SESSION['email']=="admin@gmail.com")
         {
           ?>
            <div class="login">
               <button style="width:auto;"><a href="additem.php" style="text:decoration:none;color:Burlywood">Add</a></button> 
               <button style="width:auto;"><a href="edititem.php" style="text:decoration:none;color:Burlywood">Edit</a></button>
             </div>
           <?php
         }
        ?>

        </div>
        
        
        <!--Contact details of the members-->
        <div id="contact">
          <br>
          <h2>CONTACT</h2>
          ajosep13@confederationcollege.ca
          <br>bbabu1@confederationcollege.ca
          <br>ssaji1@confederationcollege.ca
          <br>akhangura@confederationcollege.ca
          <br>sthankac@confederationcollege.ca
        </div>
        </div>
        <!-- Grid end -->
    </body>
</html>