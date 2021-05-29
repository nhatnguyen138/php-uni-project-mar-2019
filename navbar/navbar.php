<?php	
	// Echo the 'Menu' bar whenever the system is logged in
	echo
	'<p id="domain_name">Assists 4 Motorists .Com .Au</p>
	<br />
	<table style="margin:30px 80px;width:500px;">
		<tr>
			<td style="text-align:right;width:50px;">
				<img style="border-radius:50%;width:100px;height:100px;" src="..\\avatar\\'."$usertype".'.png">
			</td>
			<td style="padding-left:10px;text-align:left;width:300px;">
				<p style="font-size:15px;"><b>Welcome back, '."$fname".'!</b></p>
				<br />
				<a class="menu_button" href="..\dashboard\dashboard.php">Dashboard</a>&nbsp;<a class="menu_button" href="..\profile\profile.php">Profile</a>&nbsp;<a class="menu_button" href="..\login\logout.php">Logout</a>
			</td>
		</tr>
	</table>';
?>