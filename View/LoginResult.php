<?php
session_start(); 
if(empty($_SESSION["fname"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta name="viewport", content="width=device-width, initial-scale=1">
</head>
<style>
div#LoginResultBlock{width:270px;border:5px solid #ddd;padding:10px;margin:auto; text-align:center}
body{background-image: url('../Images/G.gif'); background-repeat:no-repeat; background-size:cover; color:orange;font-size:18px}
</style>

<body>

<div id="LoginResultBlock">
<h1 style="color: #00E9FF; font-family: calibri">Home</h1>
<style>
h3{color:lightgreen}
h5{color:#00E9FF}
h6{color:white}
</style>

<h2 style="color:white">Welcome </h2> <h2 style="color:red"><?php echo  $_SESSION["fname"] . " " . $_SESSION["lname"]; ?><br></h2>
<b>
<?php
  echo "<h3>Password:</h3>";
  echo $_SESSION["password"];
?>
<h2 style="color: #B6FF00"><marquee direction=left>Do you want to go to </marquee></h2> <a href="LogIndex.php" style= "color:#00E9FF; font-family:calibri">Next Page</a>
<h2 style="color: #B6FF00"><marquee direction=left>Do you want to</marquee></h2> <a href="../Control/logout.php" style= "color:#00E9FF; font-family:calibri">Log Out</a><br><br>

<h6 style="font-size:10px; font-family: verdana; text-align: center"><?php include '../Footer/footer.php';?></h6>
</b>

</div>
</body>
</html>


