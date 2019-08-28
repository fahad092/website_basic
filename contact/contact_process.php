<html>
<?php
   $db=mysqli_connect('localhost','root','','contact')or die('couldnot connect');
    $gmail=$_POST['gmail'];
	$phone_number=$_POST['phone_number'];
	$sql="insert into contact (gmail,phone_number)values('$gmail',$phone_number)";
	$result=mysqli_query($db,$sql)or die("$sql");
?>
<head>
</head>
<body>
<h2><marquee align="right">Welcome To Our Employee information</marquee></h2>
<h3>
<p>
1. Name:Khondakar Fahad</br>
   post:CEO</br>
<a href="Khondakar Fahad@gmail.com">Khondakar Fahad@gmail.com</a>
</p>
<p>
2. Name:A.Karim</br>
   post:managger</br>
<a href="abdulkarim@gmail.com">abdulkarim@gmail.com</a>
</p>
<p>
3. Name:Mirza md. Ahsan Habib</br>
   post:managger</br>
<a href="AhsanHabib@gmail.com">AhsanHabib@gmail.com</a>
</p>
</h3>
</body>
</html>