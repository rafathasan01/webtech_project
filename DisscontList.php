<?php
header("Content-type: text");

echo "<html>
<head>
	<title>Employee List</title>
</head>
<body">
$file = fopen('Disscount.text','r') ;
?>
<table border = "2" width="80%" height="40" align="center">

<tr><td>
	<center>

	
<h1 align="center">Welcome Anik</h1>

	

	
	<a href="contact.html"><button type="button" size="10">Messeage</button></a>

   </center>

</td></tr>
</table><br>
<center>
	<h1>Employee List</h1><br>

    <a href="Disscount.html">Add Disscount</a><br><br>
	<a href="DeleteEmployee.html">Delete Disscount</a><br><br>
                    

<table border="2" width="70%" height="40%" align="center" colspan="2" >
	
<th height="" width="10%">Hotel Name</th>
<th height="" width="10%">Location</th>
<th height="" width="10%">Offer</th>
<th height="" width="10%">Offer validity</th>


<?php
 
while(($row = fgets($file)) != false) {
	
	$col = explode("|",$row);
	echo "</tr>";
	echo "<tr>";
	foreach($col as $data) {
			
			echo "<td>". trim($data)."</td>";
	}
	echo "</tr>";
}
?>






</table>
</center>


</body>
</html>
