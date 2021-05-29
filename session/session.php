<html>
<head>
<link rel="stylesheet" type="text/css" href="..\navbar\navbarCSS.css">
</head>
<body>
<?php
	// Check if the system is logged in
	// Provide login data (user information)
	include 'isLoggedIn.php';
	include 'loginData.php';
	
	// Display the 'Menu' bar
	include '..\navbar\navbar.php';
?>
</body>
</html>