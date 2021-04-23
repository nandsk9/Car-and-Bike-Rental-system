<?php
	session_start();
?>	
<html>
<head>
<link href="home.css" rel="stylesheet" type="text/css">
<style>

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}



th {
    background-color: #e0e0e0;
    color: black;
	
}

</style>

<ul>
			
			<li><a href="logout.php">Log out <img src="computer_user-512.png" width="30px" height="30px"></a>Admin : nandu</li>
			
			
			
			
			<li>
			
			
			
			<li>
			
			</ul><br>

	<body>

<table align="center" border="0" width="100%">
<tr>
<th>NAME</th>
<th>MOB NO</th>
<th>EMAIL ID</th>
<th>USER ID</th>
<th>GENDER</th>
<th>LOC</th>
<th>DRIVING LICENSE NO</th>
<th>PICK UP DATE</th>
<th>DROP ON DATE</th>
<th>MODEL</th>

</tr>
	<?php




	$servername="localhost";
	$username="root";
	$password="";
	$db="cbrs";
	
	
	$conn=mysqli_connect($servername,$username,$password,$db);
	
	if(!$conn)
	{
		die("connection failed".mysqli_connect_error());
	}
	
	
	$sql="SELECT c.* , p.* FROM reg c,rent p WHERE c.id=p.id";
	
	$result=(mysqli_query($conn,$sql));
				

		while($row=mysqli_fetch_assoc($result))
		{
					
				
				
				
				
				echo "<tr>
							<td>".$row["Full_Name"]."</td>
							
						
							<td>".$row["Phone_Number"]."</td>	
						
						
						
					
							<td>".$row["Email_Address"]."</td>	
					
							<td>".$row["Phone_Number"]."</td>	
							
							<td>".$row["gender"]."</td>
						
							<td>".$row["id"]."</td>
						
							<td>".$row["Driving_Licence_NO"]."</td>
						
							<td>".$row["pick_up_date"]."</td>
						
							<td>".$row["drop_date"]."</td>
						
							<td>".$row["model"]."</td>
						</tr> ";	}
				
				?>
			
			</body>
			</html>
			
