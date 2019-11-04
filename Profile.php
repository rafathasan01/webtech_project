<?php
session_start();
if(isset($_SESSION['id']))
{
?>
<htm>
<body>
<table border="1" height= "40%" width= "60%" align="center">
<tr>
<th   height= "40%" width= "60%" colspan= "2"><center> Profile </center></th>


</tr>

<tr> 
<th height= "" width= "30%"> Id</th>

<td height= "" width= "30%"><center><?=$_SESSION['id'];?></center></td>
</tr>
<tr>
<th> Name</th>

<td height= "" width= "30%"><center><?=$_SESSION['name'];?></center></td>
</tr>
<tr>
<th> User Type</th>

<td height= "" width= "30%"><center><?=$_COOKIE['user'];?></center></td>
</tr>
<tr>
<td  height= "" width= "30%" colspan= "2"> <center><a href= "Home.php"> Go home </a></center> </td>


</tr>

<tr> 


</table>
</body>
</html>
<?php
}
?>