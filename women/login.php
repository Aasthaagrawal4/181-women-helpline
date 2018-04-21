<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	
	$userid=$_POST['userid'];
	$password=$_POST['password'];
	
	$conn = mysqli_connect("localhost", "root", "", "db1");
	//mysql_select_db("login");
	if($conn){
		$sql="select * from admin where userid = '$userid' and password = '$password'";
		$result = mysqli_query($conn,$sql);
		if($result){
			if($row=mysqli_fetch_array($result)){
				header('Location: http://localhost:8081/women/adminpage1.php');
			}else{
				echo "Failed to Login";
			}
		
		}else {
				echo mysqli_error($conn);
				
		}
		/*$row = mysqli_fetch_array($result,MYSQLI_NUM);
		if($row['userid'] == $userid && $row['password'] == $password){
			
		}else{
		 */
	}
	}
		/*
	
//query the database for user
	$result = mysql_query("select * from admin where userid = '$userid' and password = '$password'") 
				or die("failed to connect".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['userid'] == $userid && $row['password'] == $password){
		echo "login success!!  Welcome ".$row['userid'];
	}else{
		echo "Failed to login!";
	}*/
	
?>