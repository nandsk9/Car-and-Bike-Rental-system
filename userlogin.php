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
	$sql="SELECT * FROM reg";
	$result=(mysqli_query($conn,$sql));
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			if($pw==$row["password"]&&$regid==$row["id"])
			{	
				
				$c=1;
				
				
				
				header('location:car1.php');
				
				
			}
		}
		if($c==0)
		{
		 $message = "Invalid Username/Password";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header( "refresh:0;url=loguser.php" );
		}
	}	
	else
	{
		echo"<br>";
	}
?>	
	