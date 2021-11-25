<?php 
session_start();

	include("connection.php");
	include("functions.php");
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database
			$id=random_num(10);
			$query = "insert into users (id,rollno,password) values ('$id','$user_name','$password')";
			if(!mysqli_query($con, $query)){
				header("Location: notcreated.html");
				die;
			}
			header("Location: login.html");
			die;
		}
		else
		{
			header("Location: notcreated.html");
			die;
		}
	}
?>
