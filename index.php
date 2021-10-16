<?php 
	session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<style>
	body{
		background-image: url('https://images.unsplash.com/photo-1440407876336-62333a6f010f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aGVhdmVufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80');
		background-size: cover;
		background-repeat: no-repeat;
		background-attachment: fixed;
	}
</style>
<body>

		<a href="logout.php">Logout</a><br>

		<h1 style="font-size: 25px";>Levi E. Buenviaje & Josh Lean Flores</h1>
		<h1 style="font-size: 25px";>BSIT-2</h1>
		<h1 style="text-align: center;font-size: 50px; color: blue; font-style: italic;">God's Creation</h1>
		
		Hello, <?php echo $user_data['user_name']?> <h1 style="font-size: 20px; font-style: normal;"/h1>The creation story begins with the opening chapter of the Bible and these words: "In the beginning, God created the heavens and the earth. "This sentence summarizes the drama that was about to unfold. We learn from the text that the earth was formless, empty, and dark, and God's Spirit moved over the waters preparing to perform God's creative Word. Then began the seven most creative days of all time as God spoke life into existence. A day by day account follows.<br><br>

        On the first day God creates the foundation on which the rest of the earth and surrounding universe is built. This begins with his command let there be light'. He then goes on to separate the light from the darkness, naming them night and day. On the second day God creates the sky, which is described as separating the waters above from the waters below' and the sky is named heaven. On the third day god creates the land and the sea through the command to the water be gathered together in one place and let the dry land appear'. Next he creates the grass and other foliage such as trees and plants with fruits and seeds. On the fourth day god creates the lights in the sky of heavens to divide the day from the night', in simple terms this means the sun, moon and the stars. On the fifth day God created every living creature of the seas and every winged bird, blessing them to multiply and fill the waters and the sky with life. On the sixth day God created the animals to fill the earth. On day six, God also created man and woman (Adam and Eve) in his own image to commune with him. He blessed them and gave them every creature and the whole earth to rule over, care for, and cultivate. And on the seventh day God had finished his work of creation and so he rested on the seventh day, blessing it and making it holy. <br><br>

</body>
</html>