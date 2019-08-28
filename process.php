<?php
   $db=mysqli_connect('localhost','root','','login')or die('couldnot connect');
    $id=$_POST['id'];
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$sql="insert into user (id,username,password)values($id,'$user','$pass')";
	$result=mysqli_query($db,$sql)or die("$sql");
	echo "Successfully log-in";
	
//set values from login in database;
/*$username=$_POST['user'];
$password=$_POST['pass'];
//to prvent mysql injection
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($username);
$password=mysqli_real_escape_string($password);
//connect to databse
mysqli_connect("localhost","root","");
mysqli_select_db("login");

$result=mysqli_query("select *from user where username='$username' and password='$password'" )
or die("unable to query database " .mysql_error());
$row =mysqli_fetch_array($result);
if($row['username']==$username && row['password']==$password)
{
	echo "login sucessfully"
	.$row['username'];
	
}
else
	{
		echo "failed to login";
	}*/
?>