<?php

	if(empty($_POST['abc'])){
		echo "Hello";	
	}
	echo "Bye";
	/*
	$u=$_POST['abc'];
	$p=$_POST['cde'];*/
?>



<html>


<body>
	<form action="demo.php" method="POST">
	<input type="text" class="input-fld" name="abc"><br/>
	<input type="text" class="input-fld" name="cde"><br/>
	<input type="submit" value="Submit">
	</form>
</body>
</html>