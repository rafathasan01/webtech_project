<?php
session_start();
{	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Moderator</title>
</head>
<body>

<table border = "2" width="80%" height="40" align="center">

<tr><td>
	


	
<center>	
	
<h1 align="center">Welcome <?=$_SESSION['name'];?></h1>

	<button type="button" size="20">Home</button>
	<button type="button" size="20">Hotels</button>

	<a href="logout.php"><button type="button" size="20">Log Out</button></a>
	<a href="Profile.php"><button type="button" size="10">Profile</button></a>
	<a href="Messeage.html"><button type="button" size="10">Messeage</button></a>
   </center>

</td></tr>

</table><br>
<CENTER>

<h2>Moderator Panel</h2>
</CENTER>
<table border = "2" width="80%" height="40" align="center">
<tr>
	
		<td><center><br><a href="EmployeeDetails.html">Employee Details</a><br><br>
                     <a href="CustormerDetails.html">Customer Details</a><br><br>
                     <p>Disscount offer</p>
                     <a href="RoomDetails.html">Room Details</a><br>
                 
             </center>
         </td>


</tr>
</table>


</body>
</html>
<?php
}
?>