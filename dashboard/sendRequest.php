<html>
<head>
<title>Send Request | Assists 4 Motorists .Com .Au</title>
<link rel="stylesheet" type="text/css" href="sendRequestCSS.css">
</head>
<body>
<?php
	// Provide login data (user information)
	// And display the 'Menu' bar
	include '..\session\session.php';
?>
	<div>
		<h2>Your Profile Information</h2>
		<h3>This information will be in the service request; therefore, it will be shown to all the available professionals.</h3>
		<table style="margin:0px 20px;font-family:Verdana;font-size:14px;color:white;">
			<tr>
				<td width="150px"><b>Full name</b></td>
				<td>: <?php echo $fname." ".$lname;?></td>
			</tr>
			<tr>
				<td><b>Phone Number</b></td>
				<td>: <?php echo $phone;?></td>
			</tr>
			<tr>
				<td><b>Car Information</b></td>
				<td>: <?php echo "$car_brand".' '."$car_year".' - '."$car_rego"?></td>
			</tr>
		</table>
	</div>
	<div>
		<h2>Request Information</h2>
		<form action="..\service_request\createRequest.php" method="post">
			<p> Which area did the problem occur?			</p>
			<select name="area">
				<option value="1">	Sydney NSW				</option>
				<option value="2">	Newcastle NSW			</option>
				<option value="3">	Maitland NSW			</option>
				<option value="4">	Wollongong NSW			</option>
				<option value="5">	Tweed Heads NSW			</option>
				<option value="6">	Coffs Harbour NSW		</option>
				<option value="7">	Albury NSW				</option>
				<option value="8">	Wagga Wagga NSW			</option>
				<option value="9">	Port Macquarie NSW		</option>
				<option value="10">	Nowra-Bomaderry NSW		</option>
				<option value="11">	Canberra ACT			</option>
				<option value="12"> Brisbane QLD			</option>
				<option value="13"> Gold Coast QLD			</option>
				<option value="14"> Sunshine Coast QLD		</option>
				<option value="15"> Townsville QLD			</option>
				<option value="16"> Cairns QLD				</option>
				<option value="17"> Mount Gambier SA		</option>
				<option value="18"> Victor Habor-Goolwa SA	</option>
				<option value="19"> Murray Bridge SA		</option>
				<option value="20"> Port Lincoln SA			</option>
				<option value="21"> Port Pirie				</option>
				<option value="22"> Port Augusta			</option>
				<option value="23"> Melbourne VIC			</option>
				<option value="24"> Geelong VIC				</option>
				<option value="25"> Ballarat VIC			</option>
				<option value="26"> Bendigo VIC				</option>
				<option value="27"> Shepparton VIC			</option>
				<option value="28"> Melton VIC				</option>
				<option value="29"> Mildura VIC				</option>
				<option value="30"> Warrnambool VIC			</option>
				<option value="31"> Perth WA				</option>
				<option value="32"> Geraldton WA			</option>
				<option value="33"> Kalgoorlie-Boulder WA	</option>
				<option value="34"> Albany WA				</option>
				<option value="35"> Karratha WA				</option>
				<option value="36"> Greater Hobart TAS		</option>
				<option value="37"> Launceston TAS			</option>
				<option value="38"> Devonport TAS			</option>
				<option value="39"> Burnie TAS				</option>
				<option value="40"> Ulverstone TAS			</option>
			</select>
			<p> Choose the category of the problem			</p>
			<?php
				echo
				'<select name="problem">
					<option value="1">Locked Out			</option>
					<option value="2">Stuck Vehicle			</option>
					<option value="3">Out of fuel			</option>
					<option value="4">Accident/Vandalism	</option>
					<option value="5">Flat Tire				</option>
					<option value="6">Tow					</option>
					<option value="7">Jump Start			</option>
					<option value="8">Unknown Problem		</option>
				</select>';
			?>
			<p> Provide the problem description				</p>
				<input type="text" name="description"
				autocomplete="off" size="70" maxlength="200">
			<input class="button" type="submit" value="Send Request Now!">
		</form>
	</div>
</body>
</html>