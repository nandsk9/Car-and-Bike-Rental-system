 <?php

 //CONNECTION CREATION=>
	
	$servername="localhost";
	$username="root";
	$password="";
	$db="abcdb";
	
	$conn=mysqli_connect($servername,$username,$password,$db);
	
	$name=$_POST['id'];
	$pwd=$_POST['pwd'];
	
	$sql="SELECT * FROM cbrs";
	
	/*$result=mysqli_query($conn,$sql);
	
	 if($name!=''&&$pwd!='')
	{
   $sql=mysql_query("select * from cbrs='".$id."' and password='".$pwd."'") or die(mysql_error());
   $conn=mysql_fetch_row($sql);
  
  if($conn)
	{
    $_SESSION['name']=$name;
    header('location:welcome.php');
	}
   else
    {
    echo'You entered username or password is incorrect';
    }
   }
 else
 {
  echo'Enter both username and password';
 }

	
	
	mysqli_close($conn);
	
?></form>
<?php
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('new') or die(mysql_error());
 

}*/
?>
</body>
</html>