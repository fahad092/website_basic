
<?php
   $db=mysqli_connect('localhost','root','','comment')or die('couldnot connect');
    $email=$_POST['email'];
	$comment=$_POST['comment'];
	$sql="insert into comment (email,comment)values('$email','$comment')";
	$result=mysqli_query($db,$sql)or die("$sql");
	if($result==$email&&$comment)
	echo 'THANK YOU FOR YOUR FEEDBACK';
    else
	echo'PLEASE INSERT INTO A EMAIL ADDRESS OR GIVE COMMENTS'
	/*$connect=mysqli_connect('localhost','root','','comment') or die('couldnot connect');
	if($connect)
	{
		
		$query1="SELECT * FROM comment";
		$result=mysqli_query($connect,$query1);
		while ($row=mysqli_fetch_array($result))
		{ 
			echo $row['email'].'<br>'. $row['comment']. '<br>' . '<br>';
		}
	} 
	else
		die("Failed to connect to my sql" .mysqli_error());*/
?>
