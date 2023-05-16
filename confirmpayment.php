<?php
 $conn=mysqli_connect("localhost","root","","sql file");
 $db=mysqli_select_db("sql file",$conn);
 
if($conn)
{
	echo "connected";
}
else
{
	echo "not connected";
}

$cardno=$_POST['cardno'];
$cvvno=$_POST['cvvno'];
$expiremonth=$_POST['expiremonth'];
$expireyear=$_POST['expireyear'];

$sql=mysqli_query("INSERT INTO payment(cardno,cvvno,expiremonth,expireyear)
VALUES('$cardno','$cvvno','$expiremonth','$expireyear')");


if($sql)
	header('location:paymentdone.php');
			
?>