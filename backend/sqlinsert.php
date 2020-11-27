<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$accesslevel=$_POST['accesslevel'];
$address=$_POST['address'];
$password=$_POST['password'];
$button=$_POST['save'];

if($button=='Save!'){
	$dbhost='localhost';
	$dbuser='root';
	$dbpwrd='';
	$dbname='regdb';
		$conn=mysqli_connect($dbhost, $dbuser, $dbpwrd, $dbname)
			or die('MySql Connection Failed...'.mysqli_error());
		if(!$conn){
			die("Connection Failed:".mysqli_error());
		}
			$sql="INSERT INTO users(lname, fname, accesslevel, 
			address, password) VALUES('$lname', '$fname', '$accesslevel', $address', '$password')";
			mysqli_query($conn, $sql);	
		}
?>

<!DOCTYPE html>
<html>
<h1><a href="view.php">View Data</a></h1>
</html>

