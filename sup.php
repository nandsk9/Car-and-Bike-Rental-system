<html>
<head><title>signup</title>
<link href="home.css" rel="stylesheet" type="text/css">

<style>
     
	 body{
		  background: #f0f0f0;
	 }
	 
	 table
	 {
		
		fondcolor:white;
		margin:3px;
		//border:dotted;	
	    padding:19px;	 
	    width:700px;
	    color:black;
	
	 
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

	
	
	<h1>Create a Rental Account!</h1>
	<h3>Signup Here</h3>

	<form action="sup2db.php" method="POST">


		<table>
		
		<tr>
			<td><label>Full Name:</label></td>
			<td><input type="text" name="name" required></td>
		</tr>
			
		<tr>
			<td><label>Phone Number:</label></td>
			<td><input type="text" name="phone" required><td>
		</tr>
		
		<tr>
			<td><label>Email Address:</td>
			<td><input type="email" name="email" required></td>
		</tr>
		
		<tr>
		
			<td><label>id :</td>
			<td><input type="text" name="idno" required></td>
		</tr>	
		
		<tr>
			<td><label>Password:</td>
			<td><input type="password" name="password" required></td>
		</tr>	
			
		<tr>	
			<td><label>Gender:</td>
			<td><select name="gender" option value="cs" required>
				
				<option> Male </option>
				<option> Female </option>
			</select></td>
							
		</tr>	
		
		<tr>
			<td><label>Location:</td>
			<td><input type="text" name="location" required></td>
		</tr>	
		
		<tr>
			<td><label>Driving Licence NO:</td>
			<td><input type="text" name="dlno" required></td>
			
			<td><input type="submit" value="signup" ></td>
			
	    </tr>
								
		
	</form>

	
	
</body>

</html>

