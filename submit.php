<html>
  <body>
    <?php 
	$uname=$_GET["usename"]
	
	
	if(is_numeric($uname))
	{
		echo "numeric";
		
	}
	else
	{
		echo "text";
		
	}
	
	
    ?>

  </body>
</html>