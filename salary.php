<html>
<head>
<style>
  table,tr,th,td
  {
	  border:1px solid #107C10;
  }
</style>
</head>
<body>
 <table id="table">
  <tr>
     <th>User_Name</th>
	 <th>account_no</th>
	 <th>ammount</th>
  <tr>
  
 </table>
</body>

<?php
 $db=mysqli_connect('localhost','root','','salary')or die('couldnot connect');
 $user_name=$_POST['user_name'];
 $account_no=$_POST['account_no'];
 
 /*$sql="insert into salary (user_name,account_no)values('$user_name','$account_no')";
	$result=mysqli_query($db,$sql)or die("$sql");
	echo "Successfully log-in";*/
   $connect=mysqli_connect('localhost','root','','salary') or die('couldnot connect');
	if($connect)
	{
		
		$query="SELECT * FROM salary where user_name='$user_name' AND account_no='$account_no'";
		$result=mysqli_query($connect,$query);
		if ($row=mysqli_fetch_array($result))
		{ 
	       
			echo $row['user_name'].'______'.$row['account_no'].'_____'. $row['salary']. '<br>';
		}
		else
			echo "SORRY...You Are Not Our Employee.<br>This Field Required Only For Employees<br>thanks for query<br>";
		
	} 
	else
		die("Failed to connect to my sql" .mysqli_error());
?>
</html>
