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
		$user_id = random_num(20);
		$query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

		mysqli_query($con, $query);

		header("location: login.php");
		die;
	}else
		{		
			echo "Please enter some valid information!";    
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<div style="font-size: 50px; font-style: unset; margin: 10px;text-align: center;margin-top: 4%; color: black;">Welcome!</div>
	 <style>
	 	body {
	 		background-image: url('https://wallpaperaccess.com/full/783289.jpg');
	 		background-repeat: no-repeat;
	 		background-attachment: fixed;
	 		background-size: cover;
	 	    }
	 
	 </style>
<body>
	 
	 <style type="text/css">
	 	
	 	#text {
	 		height: 25px;
	 		border-radius: 5px;	
	 		padding: 4px;
	 		border: solid thin #aaa;
	 		width: 65%;
	 	}

	 	#button {
	 		padding: 10px;
	 		width:  100px;
	 		color: white;
	 		background-color: darkslategray;
	 		border: none;
	    }
	 	
	 	#box{
	 		background-color: skyblue;
	 		margin: auto;
	 		width: 400px;
	 		padding: 10px;
	 		text-align: center;
	 		margin-top: 4%;
	 		border-style: ridge;
	 	}

	</style>

	<div id="box">
		<form method = "post">
			<div style="font-size: 30px; font-style: normal; margin: 10px; color: black;">Sign Up</div><br>
			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Sign Up"><br><br>
			<div style="font-style: inherit;"> Already have an account?</div>
			<a href="login.php">Click to Login</a><br><br>

		</form>
	</div>
</body>
</html>