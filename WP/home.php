<?php
session_start();
if(isset($_SESSION['id']))
{ $user= trim($_COOKIE['user']);
if( $user == "Admin")
	{	
?>
<html>
<body>
<h1>ADMIN LOG IN SUCCESS!!!</h1><br>
<center><a href="logout.php"><button type="button" size="10">Log Out</button></a>
<a href="Profile.php"><button type="button" size="10">Profile</button></a></center>
<body>
<html>

<?php
}
elseif ( $user == "User")
{

?>


<html>
<head><title>Welcome To Our Hotel</title>
</head>
<body>
<table border = "2" width="80%" height="" align="center">
<tr><td>
<img src="a.jpg" width ="20%" height="20%" align="left">
<center><h1>WELCOME TO OUR HOTEL</h1><p>
<a href="hotel.html"><button type="button" size="10">Hotels</button></a>
<a href="logout.php"><button type="button" size="10">Log Out</button></a>
<a href="contact.html"><button type="button" size="10">Contact Us</button></a>
<a href="Profile.php"><button type="button" size="10">Profile</button></a>
</center>
</td></tr>
</table><br>

<center><text><b>Welcome Back <?=$_SESSION['name'];?></b></text></center><hr><br><br>
<center><u><h1><font>WELCOME TO ONLINE HOTEL BOOKING MANAGEMENT SYSTEM</font></u><h1></center><br>
<center><h2>Book Your Hotels, Visit Your Place</h2></center><br><br>


<table border = "2" width="80%" height="" align="center">
<form><tr>
<td><b><center>Select Place:</b>
		<select>
			<option></option>
			<option>Dhaka</option>
			<option>Chittagong</option>
			<option>Cox's Bazar</option>
			<option>Rangamati</option>
			<option>Bandarban</option>
			<option>Sylhet</option>
			<option>Khulna</option>
			<option>Barishal</option>
			<option>Rajshahi</option>
			<option>Dinajpur</option>
		</select>

<b>Choose Hotels:</b>
		<select>
			<option></option>
			<option>Hotel 1</option>
			<option>Hotel 2</option>
			<option>Hotel 3</option>
			<option>Hotel 4</option>
			<option>Hotel 5</option>
			<option>Hotel 6</option>
			<option>Hotel 7</option>
			<option>Hotel 8</option>
			<option>Hotel 9</option>
			<option>Hotel 10</option>
		</select>
<b>Check-in:</b><input type="date" name=""/>
<b>Check-out:</b><input type="date" name=""/>
<b>Select Rooms:</b>
		<select>
			<option></option>
			<option>Single Bed Room</option>
			<option>Double Bed Room</option>
			<option>Triple Bed Room</option>
			<option>Single AC Room</option>
			<option>Double AC Room</option>
			<option>Triple AC Room</option>
			<option>Family Apartment</option>
		</select><br><br>
	<input type="reset" name="" value="Reset">
	<input type="submit" name="" value="Submit"></center></td>
</tr></form>
</table><br>

<table border = "2" width="80%" height="" align="center" >
	<tr>
	<td><h3>HOTEL 1</h3>
	<text>Single AC Room, Double AC Room, Triple AC Room, Family Apartment</text>
	<br><br>
	<b>Starts From 2000Tk*</b>
	</td>
	<td>
	<img src="a.jpg" width="50%" height="30%" align="right"><br><br>
	<a href="rooms.html"><button type="button" size="10" style="margin-left:2.5em" >View Rooms</button><br><br></a>
	<button type="button" size="10" style="margin-left:2.5em" >Book Hotel</button>
	</td>
	</tr>
	</table><br>
	
<table border = "2" width="80%" height="" align="center" >
	<tr>
	<td><h3>HOTEL 2</h3>
	<text>Single AC Room, Double AC Room, Triple AC Room, Family Apartment</text>
	<br><br>
	<b>Starts From 1800Tk*</b>
	</td>
	<td>
	<img src="a.jpg" width="50%" height="30%" align="right"><br><br>
	<a href="rooms.html"><button type="button" size="10" style="margin-left:2.5em" >View Rooms</button><br><br></a>
	<button type="button" size="10" style="margin-left:2.5em" >Book Hotel</button>
	</td>
	</tr>
	</table><br>
	
	<table border = "2" width="80%" height="" align="center" >
	<tr>
	<td><h3>HOTEL 3</h3>
	<text>Single AC Room, Double AC Room, Triple AC Room, Family Apartment</text>
	<br><br>
	<b>Starts From 1500Tk*</b>
	</td>
	<td>
	<img src="a.jpg" width="50%" height="30%" align="right"><br><br>
	<a href="rooms.html"><button type="button" size="10" style="margin-left:2.5em" >View Rooms</button><br><br></a>
	<button type="button" size="10" style="margin-left:2.5em" >Book Hotel</button>
	</td>
	</tr>
	</table><br>
	
	</table>
<center><h1>Select Place To Travel</h1></center><br>

<table border="2" width="80%" height="" align="center">
	<tr>
	<td><center><img src="a.jpg" width="100%" height="50%" align=""></center><br><b><center>
				<a href="hotel.html"><button type="button" size="10">Cox's Bazar</button></a></center></td>
		<td><center><img src="a.jpg" width="100%" height="50%" align=""></center><br><b><center>
				<a href="hotel.html"><button type="button" size="10">Chittagong</button></a></center></td>
			<td><center><img src="a.jpg" width="100%" height="50%" align=""></center><br><b><center>
				<a href="hotel.html"><button type="button" size="10">Sylhet</button></a></center></td>
	</tr>
</table><br><br>
	
<center>All Rights (c) reserved to HOTEL | Terms & Conditions | Privacy Policy | FAQ | Sitemap<center>
	
</body>
</html>

<?php
}
else if ( $user == "Moderator")
	{

?>

<html>
<body>
<h1>MODERATOR LOG IN SUCCESS!!!</h1><br>
<center><a href="logout.php"><button type="button" size="10">Log Out</button></a>
<a href="Profile.php"><button type="button" size="10">Profile</button></a></center>
</body>
</html>

<?php
}
else
{

?>
<!DOCTYPE html>
<html>
<head>
<title> We are in Employee here </title>
</head>
<body>

<center><h1>WELCOME <?=$_SESSION['name'];?></h1></center><br><br>

<center><a href="logout.php"><button type="button" size="10">Log Out</button></a>
<a href="Profile.php"><button type="button" size="10">Profile</button></a></center>
 <table border="2" width="80%" height="" align="center">
      
       <tr><td>
	   
     	<center><p><h3 style="color:blue;"> Welcome To Our Hotel Employee Page</h3></p>
		<marquee><h4 style="color:orange;"> This is our hotel employee page </marquee></h4>
		<a href="Vi room.html"><button type="button" size="15"style="color:red;">View Room </button></a>
		<a href="Up room.html"><button type="button" size="15" style="color:yellow;">Update Room </button></a>
		<a href="Cust Details.html"><button type="button" size="15" style="color:orange;">Customer details </button></a>
		<br>
		<a href="Cancel booking.html"><button type="button"size="15" style="color:black;">Cancel Booking</button></a>
		<a href="Avail room.html"><button type="button"size="15" style="color:Dodgerblue;">Room details</button></a>
		<a href="Send message.html"><button type="button"size="15" style="color:Dodgerblue;">Send Message</button></a>
		<a href="history.html"><button type="button"size="15" style="color:Dodgerblue;">History room</button></a>
		<br/>
		<a href="Ranking.html"><button type="button"size="15" style="color:Tomato;">View Ranking</button></a>
		<a href="hotel.html"><button type="button"size="15" style="color:Tomato;">hotel</button></a>
		
		</center>
		</td></tr>
		</table>
		
		<table>
        <form>
             		
	
	</body>
	</html>
	
	



<?php
}}
?>