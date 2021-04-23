<?php



?>

<html>
<head><title>rentok</title>
<link href="home.css" rel="stylesheet" type="text/css">

<style>
     html, body {
	 background: #f0f0f0;
	 }
	 table
	 {
		
		
		margin:3px;
		//border:dotted;	
	    padding:19px;	 
	    width:700px;
	    
	
	 
	 }
	 
	 h1
	 {
		color:#ADD8E6; 
	 }
    h3
	{
		color:#C0C0C0; 
	}
	input[type=submit] 
		{
            float: right;
            margin-right: 20px;
            margin-top: 20px;
            width: 90px;
            height: 30px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #acd6e0; 
            
            border-radius: 30px;
            border: 1px solid #66add6;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
            cursor: pointer;
        }
        
		input[type=submit]:hover
		{
            background-image: -webkit-gradient(linear, left top, left bottom, from(#b6e2f0), to(#6ec2e8));
            
		}
		
		
</style>



</head>

<body>


	 
	<ul>
			<li><a href="home.php">Home</a></li>
			</ul>
	<h1> Rental ur ride!</h1>
	<h3> Here</h3>

	<form action="rentoksub.php" method="POST">


		<table> 
		
		<tr>
			<td><label>Selected Model:</td>
			<td>
			
			<?php 
			$brand=$_POST['mode']; 
			echo $brand;  
			session_start();
			$_SESSION['mode'] = "$brand";
			?>
						
			</td>
		</tr>
		
		
		<tr>
			<td><label> Pick up date:</label></td>
			<td><input type="date" name="pick" required ></td>
		</tr>
			
		<tr>
			<td><label>Drop date:</label></td>
			<td><input type="date" name="drop"required><td>
		</tr>
		
		
		
		<tr>
		
			<td><label>id :</td>
			<td><input type="text" name="idno" required ></td>
		</tr>	
		
		<tr>
			<td><label>Confirm Password:</td>
			<td><input type="password" name="password" required></td>
		</tr>	
		
		
		
			<tr>
		<td><br><br><input type="submit" value="rent now" required ><br> </td>
		</tr>						
		<tr><td><br><a href="sup.php"><img src="not reg to log.jpg" width="200px" height="20px"></td></tr></a>
	

	
	</form>

	
	
</body>

</html>



