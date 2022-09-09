
<?php
	//database connection
	$conn=mysqli_connect("localhost", "root", "", "expense_tracker");
	if(mysqli_connect_errno()){
		echo "Connection Fail".mysqli_connect_error();
	}
?>
