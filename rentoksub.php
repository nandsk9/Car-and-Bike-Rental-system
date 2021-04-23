<?php

//CONNECTION CREATION=>
	
	
	
	$servername="localhost";
	$username="root";
	$password="";
	$db="cbrs";
	
	
	
	
	//$sql="CREATE DATABASE cbrs";
	
	$conn=mysqli_connect($servername,$username,$password,$db);
	
	session_start();	
	$brand = $_SESSION['mode'];
	
	
	
	$id=$_POST["idno"];
	$pass=$_POST["password"];
	$pick=$_POST["pick"];
	$drop=$_POST["drop"];
	
	
	$sql="INSERT INTO rent(pick_up_date,drop_date,id,ps,model)VALUES('$pick','$drop','$id','$pass','$brand')";
	
	//$sql="UPDATE reg SET pick_up_date=$pick drop_date=$drop WHERE id=$id ";
	
	
	
	
	if(!$conn)
	    {
	      die("connection faild ".mysqli_connect_error());
		}
    else
	    {		 
	      
	    $message = "Thank you for RENT in car and bike rental shopee...!";
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