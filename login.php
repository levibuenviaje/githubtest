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

			//read to database
			$query = "select * from users where user_name = '$user_name' limit 1";

			$result =mysqli_query($con, $query);

			if($result)
		    {
			 	if($result && mysqli_num_rows($result) > 0)
			 		{ 
			 	 		$user_data = mysqli_fetch_assoc($result);

			 	 	if($user_data['password'] === $password)
			 	 	 {
			 	 	 	 $_SESSION['user_id'] = $user_data['user_id'];
			 	 	 	 header("Location: index.php");
			 	 	 	 die;
			 	 	 }
			 	 }
			 	 }
			 	echo "Account is already log in";
			}else
			{
			 	echo "wrong username or password";
			}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<style>
	body {
		background-image: url('https://www.wallpapertip.com/wmimgs/81-810410_minimalistic-landscape-mountains-forest-bird-sky-minimalist-landscape.jpg');
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
			width: 100px;
			color: white;
			background-color: darkslategray;
			border: none;
		}

		#box{
			background-color: darkgrey;
			margin: auto;
			width: 400px;
			padding: 10px;
			text-align: center;
			margin-top: 10%;
			border-style: ridge;
		}

	</style>

	<div id="box">
		<form method="post">
			<div style="font-size: 30px;font-style: normal; margin: 10; color: black;">Login</div><br>
			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="text" type="password" name="password"placeholder="Password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to SignUp</a><br><br>

		</form>
	</div>
</body>
</html>