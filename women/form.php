<?php

$field1="";
$field2="";
$field3="";
$field4="";
$field5="";
$field6="";
$field7="";
$field8="";
$field9="";
$field10="";
$field11="";
$field12="";
$field13="";
$field14="";
$field15="";
$field16="";
$field17="";
$field18="";
$field19="";
$field20="";
$field21="";
$field22="";
$field23="";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

$field1=$_POST['field1'];
$field2=$_POST['field2'];
$field3=$_POST['field3'];
$field4=$_POST['field4'];
$field5=$_POST['field5'];
$field6=$_POST['field6'];
$field7=$_POST['field7'];
$field8=$_POST['field8'];
$field9=$_POST['field9'];
$field10=$_POST['field10'];
$field11=$_POST['field11'];
$field12=$_POST['field12'];
$field13=$_POST['field13'];
$field14=$_POST['field14'];
$field15=$_POST['field15'];
$field16=$_POST['field16'];
$field17="female";
$field18=$_POST['field18'];
$field19=$_POST['field19'];
$field20=$_POST['field20'];
$field21=$_POST['field21'];
$field22=$_POST['field22'];
$field23=$_POST['field23'];


	 $connection = new PDO
            ("mysql:dbname=db1;host=localhost", "root", "");
	$q = $connection->prepare
		("insert into complainant values('$field1','$field2',$field3,'$field4','$field5','$field6',$field7,'$field8'); insert into victim values('$field9','$field10',$field11,'$field12','$field13','$field14',$field15,$field16,'$field17'); insert into against values('$field18','$field19',$field20,'$field21'); insert into complain values('$field22','$field23')");
	$q->execute();
	$connection = null;
	 header('Location: http://localhost:8081/women/complainpage1.html');
}

?>

