


<?php




	$servername="localhost";
	$username="root";
	$password="";
	$db="cbrs";
	
	$regid=$_POST["username"];
	$pw=$_POST["password"];
	
	$conn=mysqli_connect($servername,$username,$password,$db);
	if(!$conn)
	{
		die("connection failed".mysqli_connect_error());
	}
	$c=0;
	
	$sql="SELECT c.* , p.* FROM reg c,rent p WHERE c.id=p.id";
	
	$result=(mysqli_query($conn,$sql));
	
	?>
	


	<?php 
      session_start();
		
	
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			if($pw=='1234'&&$regid=='nandu')
			{	
				$_SESSION['name']=$regid;
				$c=1;
				
				
				header("Location:admindisp.php");
			
			}
		}
		if($c==0)
		{ 
		   $message = "Invalid Username/Password";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header( "refresh:0;url=logadmin.php" );  
		}
	}	
	
?>	
</table>
<body>
</html>

