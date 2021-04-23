
   <?php
    
	//CONNECTION CREATION=>
	
	$fname=$_POST["name"];
	$phno=$_POST["phone"];
	$email=$_POST["email"];
	$id=$_POST["idno"];
	$pass=$_POST["password"];
	$ge=$_POST["gender"];
	$loc=$_POST["location"];
	$drv=$_POST["dlno"];
	
	
	$servername="localhost";
	$username="root";
	$password="";
	$db="cbrs";
	
	
	
	
	//$sql="CREATE DATABASE cbrs";
	
	$conn=mysqli_connect($servername,$username,$password,$db);
     
	$sql="INSERT INTO reg(Full_Name,Phone_Number,Email_Address,id,password,gender,Location,Driving_Licence_NO)VALUES('$fname','$phno','$email','$id','$pass','$ge','$loc','$drv')";
	
	
	if(!$conn)
	    {
	      die("connection faild ".mysqli_connect_error());
		}
    else
	    {		 
	      $message = "thank u for reg. in CBRS";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header( "refresh:0;url=home.php" );
	    }
	
		if(mysqli_query($conn,$sql))
	  {
	    echo "<br><br/>";	
	  }
	
	 else
	  {
		echo "error".$sql."<br/>".mysqli_error($conn);
	  }

   







	
	
	
	
	
	
	
	
		
	
	
	?>

	
