<html>
        <head>
        <link href="home.css" rel="stylesheet" type="text/css">
        <title>Login Page</title>
        <style>
		
		
	
        
        html, body {
            
            background: #f0f0f0;
        }
        #container {
            position: fixed;
            width: 340px;
            height: 280px;
            top: 30%;
            left: 15%;
            margin-top: -140px;
            margin-left: -170px;
           
            border-radius: 3px;
            
            

        }
        form {
            margin: 0 auto;
            margin-top: 20px;
        }
        label 
		{
            color: #555;
            display: inline-block;
            margin-left: 18px;
            padding-top: 10px;
            font-size: 14px;
        }
        p a 
		{
            font-size: 11px;
            color: #aaa;
            float: right;
            margin-top: -13px;
            margin-right: 20px;
         -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            transition: all .4s ease;
        }
       
        }
        input 
{
            font-family: "Helvetica Neue", Helvetica, sans-serif;
            font-size: 12px;
            outline: none;
        }
        input[type=text],
        input[type=password] ,input[type=time]
		{
            color: #777;
            padding-left: 10px;
            margin: 10px;
            margin-top: 12px;
            margin-left: 18px;
            width: 290px;
            height: 35px;
            border: 1px solid #c7d0d2;
            border-radius: 2px;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #f5f7f8;
            -webkit-transition: all .4s ease;
            -moz-transition: all .4s ease;
            transition: all .4s ease;
            }
        input[type=text]:hover,
        input[type=password]:hover,input[type=time]:hover {
            border: 1px solid #b6bfc0;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .7), 0 0 0 5px #f5f7f8;
        }
        input[type=text]:focus,
        input[type=password]:focus,input[type=time]:focus
		{
            border: 1px solid #a8c9e4;
            box-shadow: inset 0 1.5px 3px rgba(190, 190, 190, .4), 0 0 0 5px #e6f2f9;
        }
        
       
        input[type=submit] 
		{
            float: right;
            margin-right: 20px;
            margin-top: 20px;
            width: 80px;
            height: 30px;
            font-size: 14px;
            font-weight: bold;
            color: #fff;
            background-color: #acd6e0; /*IE fallback*/
            
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
        </head>

        <body>
		
  <ul>
	<li><a href="home.php">Home</a></li>
	</ul>
            
            <!-- Begin Page Content -->
            <div id="container">
                <form action="userlogin.php" method="POST">
                   
					<label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <div id="lower">
                       
						<input type="submit" value="Login">
                    </div><!--/ lower-->
                </form>
            </div><!--/ container-->
            <!-- End Page Content -->
        
		
</body>
</html>
<?php

phpinfo();

?>		
				
	
	
