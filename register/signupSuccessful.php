<html>
<head>
<title>Sign up complete | Assists 4 Motorists .Com .Au</title>
<link rel="stylesheet" type="text/css" href="registerCSS.css">
</head>
<body>
	<?php
		// Terminate process
		session_start();
		$conn = new mysqli("localhost","root","","a4m.com.au");
		session_destroy();
		mysqli_close($conn);
	?>
	<p id="domain_name">Welcome to Assists 4 Motorists .Com .Au !</p>
	<br /><br /><br />
	<!-- Finish the signup process -->
	<h2 style="margin:0px 5px;">Congrats!</h2>
	<p style="color:white;">You successfully signed up to the app!</p>
	<a class="button" href="..\index.php">&lt;&lt; Return to homepage</a>
</body>
</html>